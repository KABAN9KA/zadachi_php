<?php
//задача 3 из массивов
$array2 = [1, 3, 3,2, 6];
 echo "sum(array2) = " .array_sum($array2) . "\n";
$proizv= 1;
 $sum =0;
 $num = count($array2);
for($i=0; $i < $num; $i++)
{
    $sum += $array2[$i];
} 
for($i=0; $i < $num; $i++)
{
    $proizv *= $array2[$i];
} 
echo "sum(array2) = " . $sum . "\n";
echo array_product ($array2) . "\n";
echo  $proizv;
?>