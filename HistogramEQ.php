<?php

//function make_EQ()
//{
	$image = imagecreatefrompng('Ejemplo.png');
	imagefilter($image, IMG_FILTER_GRAYSCALE);
	//equalizeHist
	
	header('Content-Type: image/png');
	imagepng($image, null, 9);
//}

//make_EQ();
?>