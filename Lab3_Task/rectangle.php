<?php
$length=7;
$width=8;
if($length == $width)
{
	echo "The shape is a Square";
}
else 
{
	$Area= $length * $width;
	echo "The area of Rectangle is : ".$Area;
    echo '<br></br>';
	$Perimeter= 2 * ($length + $width);
	echo "The Perimeter of the Rectangle is  : ".$Perimeter;
}
?>