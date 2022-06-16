<!-- це задача 2 про палиндром -->

<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form method="post">
Введите строку: <input name="word" id="word" size="36"/>
<input type="submit" value="Ok" />
</html>
<?php
function compare_length($str1, $str2) {
    $length1 = mb_strlen($str1, 'UTF-8');
    $length2 = mb_strlen($str2, 'UTF-8');
    if ($length1 > $length2) 
    return 1;
    } 
    $word=trim(htmlspecialchars($_POST['word']));
    $arr_poly=array();                                                
    $arr = explode(' ', $word);  
    for($i = 0; $i < count($arr); $i++) {
    $r=strrev($arr[$i]);      
    if ($arr[$i]==$r) $arr_poly[]=$r;   
    }
    usort($arr_poly, "compare_length");
    if ($arr_poly) exit('<br><br>'.array_pop($arr_poly).'-полиндром максимальной длины.');
    echo '<br><br>'.'Полиндромы не найдены.'; 
