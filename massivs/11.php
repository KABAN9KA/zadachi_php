<?php
// задача 11 из массивов
$array7 = [3, -8, 9, -3, 4];
$num1 = count($array7);
for($i=0; $i <= ($num1+1); $i++)
{
    if ($array7[$i] < 0 )
    {
        
        array_splice($array7, ($i+1), 0, 0);
    }
    echo "$array7[$i]";
}
// print_r($array7);
?>