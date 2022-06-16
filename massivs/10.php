<?php
$array3 = [ 1, 4, 6, 9 ];
$array4 = [ 3, 7, 12];
$res_arr = array_merge($array3,$array4);
sort($res_arr);
print_r ($res_arr);
?>