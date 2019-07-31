<?php
require_once('Barcode.class.php');
$barcode = new Barcode(7899993905093, 2);
imagepng($barcode->display(), "barcode.png");
?>