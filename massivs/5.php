<?php
// задача 5 из массивов
$array4 = [1,3, 9, 3];
echo 'Максимальное значение: '. max($array4). '<br>';
echo 'Минимальное значение: '. min($array4). '<br><p>';
echo '<p>';
$mini = array_search(min($array4), $array4);
$maxi = array_search(max($array4), $array4);
$min = min($array4);
$max = max($array4);
$array4[$mini] = $max;
$array4[$maxi] = $min;
echo "Max и Min поменяны местами: ". '<br>';
foreach ($array4 as $key => $value) {
echo "$value". '<br>';
}

?>