<?php
// сортировка. задача 6 массивы.
$array = [1, 32, 3, 34, 6];
sort($array);
print_r ($array);
 
$array1 = [1, 32, 18, 3, 34, 6];
for ($j = 0; $j < count($array1) - 1; $j++){
    for ($i = 0; $i < count($array1) - $j - 1; $i++){
        // если текущий элемент больше следующего
        if ($array1[$i] > $array1[$i + 1]){
            // меняем местами элементы
            $tmp_var = $array1[$i + 1];
            $array1[$i + 1] = $array[$i];
            $array1[$i] = $tmp_var;
        }
    }
}
print_r ( $array1);
?>