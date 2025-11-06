<?php
$temp=[45,563,54,67,547,87,56,87,9,0,67,98];
$sum=array_sum($temp);
$count=count($temp);
$average = $sum/$count;

echo "Average Temprature ".round($average,2)."<br>";

$lowest = array_slice($temp,0,5);
$heighst = array_slice(array_reverse($temp),0,5);

echo "Five lowest".implode(",",$lowest)."<br>";
echo "Five heighst".implode(",",$heighst)."<br> ";
?>

