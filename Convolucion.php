<?php

function make_convolution($image, $filter, $pointX, $pointY)
{
	$imagen = imagecreatefrompng($image);
		
	imageconvolution($imagen, $filter, $pointX, $pointY);
	
	header('Content-Type: image/png');
	imagepng($imagen, null, 9);
}
?>

