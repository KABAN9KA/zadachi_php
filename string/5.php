<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8" />
</head>
<body>
<h2>5 задание</h2>
<br>
<form method="post">
    Ключ <input type="text" name="key"> <br>
		Текст <input type="text" name="text" > <br>
    <input type="radio" name="to" value="encrypt" /> Зашифровать <br>
    <input type="radio" name="to" value="decrypt" /> Расшифровать <br>
    <input type="submit" name="submit">
</form>
</body>
</html>

<?php
if (isset($_POST['key']) && isset($_POST['text']) && isset($_POST['to'])) {
	$text = strtoupper($_POST['text']);
	$key = strtoupper(sozdanie_key($text, $_POST['key']));

	switch ($_POST['to']) {
		case 'encrypt':
			echo "Шифр:" . encrypt($text, $key);
			break;
		case 'decrypt':
			echo("Расшифровка: " . decrypt($text, $key));
			break;
	}
}

//генерация ключа с длиной равной длине текста
function sozdanie_key($str, $key)
{
	$x = strlen($str);

	for ($i = 0; ; $i++) {
		if ($x == $i) {
			$i = 0;
		}
		if (strlen($key) == strlen($str)) {
			break;
		}
		$key .= $key[$i];
	}
	return $key;
}

//шифровка
function encrypt($str, $key)
{
	$chiper = "";

	for ($i = 0; $i < strlen($str); $i++) {
		$x = (ord($str[$i]) + ord($key[$i])) % 26; //range[0-25]

		$x += ord('A'); //ASCII
		$chiper .= chr($x);
	}
	return $chiper;
}

//дешифровка
function decrypt($chiper, $key)
{
	$text = "";

	for ($i = 0; $i < strlen($chiper); $i++) {
		$x = (ord($chiper[$i]) - ord($key[$i]) + 26) % 26; //range[0-25]

		$x += ord('A'); //ASCII
		$text .= chr($x);
	}
	return $text;
}
?>