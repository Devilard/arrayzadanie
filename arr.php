<?php

$arr = array();

for($i =0; $i<=10; $i++)
{

	$arr[$i] = rand(0, 5);
}


for($i =0; $i<=10; $i++)
{
	echo $i." элемент массива ";
	echo $arr[$i];
	echo "<br>";
}

$countarr = 0;

for($i = 0; $i<=10; $i++)
{
	if($arr[$i] == $arr[$i+1])
		$countarr++;
}
echo "Повторяющихся значений в массиве:  ";
echo $countarr;


?>