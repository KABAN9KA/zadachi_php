<?php
// задача 4 масивы
$array3 = [1,3, 9, 3, 1];
 $num1 = count($array3);
for($i=0; $i < $num1; $i++)
{
   for($j=$i+1; $j < $num1; $j++)
   {
       if ($array3[$i] == $array3[$j])
       {
           echo "da";
       }
   }
} 
?>