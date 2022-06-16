<?php
//  12 задача массивы
function write_number_in_words ($num, $genus = 'masculinum')
{
  $cur_order = "единицы";
  $cur_thousands_order = "единицы";
  $next_digit = "";
  if($num == 0)
    return " 00";
  $num = strval($num);
  $limit = strlen($num) - 1;
  for($i = $limit; $i >= 0; $i--)
  {
    if($cur_order == "тысячи")
    {
      if($cur_thousands_order == "сотни")
      {
        $str = write_units_hundreds($num[$i]).$str;
      }

      if($cur_thousands_order == "десятки")
      {
        $str = write_units_tens($num[$i], $next_digit).$str;
        $cur_thousands_order = "сотни";
        $next_digit = '';
      }
      if($cur_thousands_order == "единицы")
      {
        if($num[$i == 0 ? 0 : $i - 1] == "1")
        {
          $next_digit = $num[$i];
          $str = " тысяч".$str;
        }
        else
          $str = write_units_thousands_units($num[$i]).$str;
        $cur_thousands_order = "десятки";
      }
    }
    if($cur_order == "сотни")
    {
      $str = write_units_hundreds($num[$i]).$str;
      $cur_order = "тысячи";
    }
    if($cur_order == "десятки")
    {
      $str = write_units_tens($num[$i], $next_digit).$str;
      $cur_order = "сотни";
      $next_digit = '';
    }
    //единицы
    if($cur_order == "единицы")
    {
      if($num[$i == 0 ? 0 : $i - 1] == "1")
        $next_digit = $num[$i];
      else
        $str = write_units($num[$i], $genus);
      $cur_order = "десятки";
    }
  }
  return($str);
}
function write_units_tens ($tens, $next_digit)
{
  $tens .= $next_digit;
  if($tens == 2) $str_tens = " двадцать";
  if($tens == 3) $str_tens = " тридцать";
  if($tens == 4) $str_tens = " сорок";
  if($tens == 5) $str_tens = " пятьдесят";
  if($tens == 6) $str_tens = " шестьдесят";
  if($tens == 7) $str_tens = " семьдесят";
  if($tens == 8) $str_tens = " восемьдесят";
  if($tens == 9) $str_tens = " девяносто";
  if($tens == 10) $str_tens = " десять";
  if($tens == 11) $str_tens = " одиннадцать";
  if($tens == 12) $str_tens = " двенадцать";
  if($tens == 13) $str_tens = " тринадцать";
  if($tens == 14) $str_tens = " четырнадцать";
  if($tens == 15) $str_tens = " пятнадцать";
  if($tens == 16) $str_tens = " шестнадцать";
  if($tens == 17) $str_tens = " семнадцать";
  if($tens == 18) $str_tens = " восемнадцать";
  if($tens == 19) $str_tens = " девятнадцать";
  return $str_tens;
}
function write_units_hundreds ($hundreds)
{
  $str_hundreds = "";
  if($hundreds == 1) $str_hundreds = " сто";
  if($hundreds == 2) $str_hundreds = " двести";
  if($hundreds == 3) $str_hundreds = " триста";
  if($hundreds == 4) $str_hundreds = " четыреста";
  if($hundreds == 5) $str_hundreds = " пятьсот";
  if($hundreds == 6) $str_hundreds = " шестьсот";
  if($hundreds == 7) $str_hundreds = " семьсот";
  if($hundreds == 8) $str_hundreds = " восемьсот";
  if($hundreds == 9) $str_hundreds = " девятьсот";
  return $str_hundreds;
}
function write_units_thousands_units ($hundreds)
{
  $str_hundreds = "";
  if($hundreds == 0) $str_hundreds = " тысяч";
  if($hundreds == 1) $str_hundreds = " одна тысяча";
  if($hundreds == 2) $str_hundreds = " две тысячи";
  if($hundreds == 3) $str_hundreds = " три тысячи";
  if($hundreds == 4) $str_hundreds = " четыре тысячи";
  if($hundreds == 5) $str_hundreds = " пять тысяч";
  if($hundreds == 6) $str_hundreds = " шесть тысяч";
  if($hundreds == 7) $str_hundreds = " семь тысяч";
  if($hundreds == 8) $str_hundreds = " восемь тысяч";
  if($hundreds == 9) $str_hundreds = " девять тысяч";
  return $str_hundreds;
}
function write_units ($units, $genus='masculinum')
{
  $str_units = "";
  if($genus == 'masculinum')
  {
     if($units == 1) $str_units = " один";
     if($units == 2) $str_units = " два";
  }
  if($genus == 'femininum')
  {
     if($units == 1) $str_units = " одна";
     if($units == 2) $str_units = " две";

  }
  if($units == 3) $str_units = " три";
  if($units == 4) $str_units = " четыре";
  if($units == 5) $str_units = " пять";
  if($units == 6) $str_units = " шесть";
  if($units == 7) $str_units = " семь";
  if($units == 8) $str_units = " восемь";
  if($units == 9) $str_units = " девять";
  return $str_units;
}
echo write_number_in_words(2134);
?>