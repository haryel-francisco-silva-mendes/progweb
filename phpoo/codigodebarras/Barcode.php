<?php
require_once('Barcode.class.php');
$barcode = new Barcode(1899993905091, 2);
imagepng($barcode->display(), "barcode.png");
?>