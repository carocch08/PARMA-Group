<?php

function make_convolution($image, $filter, $pointX, $pointY)
{
	$imagen = imagecreatefrompng($image);
		
	imageconvolution($imagen, $filter, $pointX, $pointY);
	
	header('Content-Type: image/png');
	imagepng($imagen, null, 9);
}

//Llamada
$ima = 'Ejemplo.png';
$fil = array(array(2, 0, 0), array(0, -1, 0), array(0, 0, -1));
make_convolution($ima, $fil, 1, 127);
?>

