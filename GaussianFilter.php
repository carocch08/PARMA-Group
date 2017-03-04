<?php

function guassianFilter($image, $L, $K, $x, $y)
{
	$u = $x - (($K-1)/2);
	$v = $y - (($L-1)/2);
	$finU = $x + (($K-1)/2);
	$finV = $y + (($L-1)/2);
	$calculus = 0;
	
	$alpha = alphaCalculus($K, $L);
	
	$res = ((1/$alpha) * $calculus);
	
	for ($u; $u <= $finU; $u++)
	{
		for ($v; $v <= $finV; $v++)
		{
			$calculus = $image[$u][$v] * FCalculus($x-$u, $y-$v); 
		}
	}
	echo $res;
}

function FCalculus($x, $y)
{
	$standardDeviation = 0.5;
	$res = pow(M_E,(-(pow($x,2))+(pow($y,2))/2*pow($standardDeviation,2)));
	echo $res;
}

function alphaCalculus($K, $L)
{
	for ($u = 0; $u <= $K; $u++)
	{
		for ($v = 0; $v <= $L; $v++)
		{
			echo FCalculus($u, $v);
			echo "<br>";
		}
	}
}

?>