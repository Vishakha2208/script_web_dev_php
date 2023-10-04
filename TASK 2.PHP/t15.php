<?php
$a=10;
$b=20;
$c=30;
if 
($a>=$b && $a>=$c)
{
	 $largest=$a;
}
elseif($b>=$c && $b>=$a)
{
	$largest=$b;
}
else
{
	$largest=$c;
}
echo "the largest number is: $largest";
?>