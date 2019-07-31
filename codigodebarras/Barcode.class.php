<?php

/*
 * Gerador de Código de Barras EAN 13
 */

class Barcode
{
   public $font;
   public $number;
   public $scale;

   private $_key;
   private $_bars;

   private $_image;
   private $_width;
   private $_height;

   public static $PARITY_KEY = array(
      0 => "000000", 1 => "001011", 2 => "001101", 3 => "001110",
      4 => "010011", 5 => "011001", 6 => "011100", 7 => "010101",
      8 => "010110", 9 => "011010"
   );

   public static $LEFT_PARITY = array(
      // Codificação ímpar
      0 => array(
          0 => "0001101", 1 => "0011001", 2 => "0010011", 3 => "0111101",
          4 => "0100011", 5 => "0110001", 6 => "0101111", 7 => "0111011",
          8 => "0110111", 9 => "0001011"
      ),
      // Codificação par
      1 => array ( 
          0 => "0100111", 1 => "0110011", 2 => "0011011", 3 => "0100001", 
          4 => "0011101", 5 => "0111001", 6 => "0000101", 7 => "0010001", 
          8 => "0001001", 9 => "0010111"
       )
   );

   public static $RIGHT_PARITY = array(
      0 => "1110010", 1 => "1100110", 2 => "1101100", 3 => "1000010", 
      4 => "1011100", 5 => "1001110", 6 => "1010000", 7 => "1000100", 
      8 => "1001000", 9 => "1110100"
   );

   public static $GUARD = array(
      'start' => "101", 'middle' => "01010", 'end' => "101"
   );

   public static function checksum (string $ean) {
      $even=true; $esum=0; $osum=0;
      for ($i = strlen($ean)-1; $i >= 0; $i--) {
         if ($even) $esum+=$ean[$i]; else $osum+=$ean[$i];
            $even=!$even;
      }
      return (10-((3*$esum+$osum)%10))%10;
   }


   // Método construtor
   public function __construct (string $number, $scale, $fontpath=null)
   {
      /* Obter a chave de paridade, que é baseada no primeiro dígito. */
      $this->_key = self::$PARITY_KEY[substr($number,0,1)];

      if (!$fontpath)
          $this->font = dirname(__FILE__) . "/" . "FreeSansBold.ttf";
      else
          $this->font = $fontpath;


      if ($scale < 2)
          $this->scale = 2;
      else if ($scale > 12)
          $this->scale = 12;
      else
          $this->scale = $scale;

      $len = strlen($number);
      if ($len != 13 && $len != 12)
          trigger_error('Barcode expects 12 or 13 digit number', E_USER_ERROR);

      /* Checksum (13º digito) pode ser calculado ou fornecido */
      $this->number = $number;
      if ($len === 12)
          $this->number .= self::checksum($number);

      $this->_bars = $this->_encode();
      $this->_createImage();
      $this->_drawBars();
      $this->_drawText();
   }

   public function __destruct()
   {
      imagedestroy($this->_image);
   }

   protected function _encode()
   {
      $barcode[] = self::$GUARD['start'];
      for($i=1;$i<=strlen($this->number)-1;$i++)
      {
         if($i < 7)
            $barcode[] = self::$LEFT_PARITY[$this->_key[$i-1]][substr($this->number, $i, 1)];
         else
            $barcode[] = self::$RIGHT_PARITY[substr($this->number, $i, 1)];
         if($i == 6)
            $barcode[] = self::$GUARD['middle'];
      }
      $barcode[] = self::$GUARD['end'];
      return $barcode;
   }

   /**
    * Criar a imagem
    */

   protected function _createImage()
   {
      $this->_height = $this->scale * 60;
      $this->_width  = 1.8 * $this->_height;
      $this->_image = imagecreate($this->_width, $this->_height);
      ImageColorAllocate($this->_image, 0xFF, 0xFF, 0xFF);
   }


   /**
    * Desenhando as barras
    */

   protected function _drawBars()
   {
      $bar_color=ImageColorAllocate($this->_image, 0x00, 0x00, 0x00);

      $MAX   = $this->_height*0.025;
      $FLOOR = $this->_height*0.825;
      $WIDTH = $this->scale;
      
      $x = ($this->_height * 0.2) - $WIDTH;

      foreach($this->_bars as $bar)
      {
         $tall = 0;

         if(strlen($bar)==3 || strlen($bar)==5)
            $tall = ($this->_height * 0.15);

         for($i = 1; $i <= strlen($bar); $i++)
         {
            if(substr($bar, $i-1, 1)==='1')
                imagefilledrectangle($this->_image, $x, $MAX, $x + $WIDTH, 
                    $FLOOR + $tall, $bar_color);
            $x += $WIDTH;
         }
      }
   }

   /**
    * Escrevendo o texto
    */

   protected function _drawText()
   {
      $x = $this->_width*0.05;
      $y = $this->_height*0.96;

      $text_color=ImageColorAllocate($this->_image, 0x00, 0x00, 0x00);

      $fontsize = $this->scale*7;
      $kerning = $fontsize*1;

      for($i=0;$i<strlen($this->number);$i++)
      {
         imagettftext($this->_image, $fontsize, 0, $x, $y, $text_color, $this->font, $this->number[$i]);
         if($i==0 || $i==6)
            $x += $kerning*0.5;
         $x += $kerning;
      }
   }

   /**
    * Retornando o código de barras por referência
    */

   public function &image()
   {
      return $this->_image;
   }

   /**
    * Enviando os cabeçalhos e exibindo o código de barras
    */

   public function display()
   {
      header("Content-Type: image/png; name=\"barcode.png\"");
      imagepng($this->_image);
   }

   /**
    * Salvando a imagem
    */
   public function save($path = 'barcode.png')
   {
      $dir = dirname($path);
      if (!file_exists($dir)) {
           mkdir($dir, 0644, true);
      }
      imagepng($this->_image, $path);
   }
}
