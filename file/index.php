<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8" />
</head>
<body>
	<form action="" method="post">
		<input type="submit" name="archive" value="Получить массив книг">
		<br>
		<br>
		Состояние: <input type="number" name="condition" value="0">
		<input type="submit" value="Получить книги с указанным состоянием">
		<br>
		<br>
		<input type="submit" value="Получить книги в удобочитаемой форме" name="pretty">
	</form>
</body>
</html>

<?php
class Book
{
	public $Title;
	public $Author;
	public $Publishing;
	public $Condition;
}

class Archive
{
	public $list = [];

	//Конструктор 
	public function __construct($str)
	{
		$fd = fopen($str, 'r') or die("не удалось открыть файл");
		while (!feof($fd)) {
			$book = new Book();
			$str = explode("|", fgets($fd));
			if (count($str) == 4) {
				$book->Author = $str[1];
				$book->Title = $str[0];
				$book->Publishing = $str[2];
				$book->Condition = $str[3];
			}
			else {
				echo "Данные в строке файла указаны не верно";
			}
			$this->list[] = $book;
		}
		fclose($fd);
	}

	//Получение данных
	public function getArchive()
	{
		print_r($this);
	}

	//Получение списка по определенному состоянию
	public function getArchiveByCondition($condition)
	{
		foreach ($this->list as $i => $book) {
			if ($book->Condition == intval($condition)) {
				print_r($book);
			}
		}
	}

	//Получение данных в удобной форме
	public function getPrettyArchive()
	{
		echo("<table border=1px>
		<thead>
		<th>Название</th>
		<th>Автор</th>
		<th>Издательство</th>
		<th>Состояние</th>
		</thead>");
		echo("<tbody>");
		foreach ($this->list as $i => $book) {
			echo '<tr>
				<td><p>' . $book->Title . '</p>
				<td><p>' . $book->Author . '</p>
				<td><p>' . $book->Publishing . '</p>
				<td><p>' . $book->Condition . '</p>
			</tr>';
		}
		echo("</tbody>
		</table>");
	}
}

$archive = new Archive("file s soderzhimim.txt");

if (isset($_POST['archive'])) {
	$archive->getArchive();
}

if (isset($_POST['condition'])) {
	$archive->getArchiveByCondition($_POST['condition']);
}

if (isset($_POST['pretty'])) {
	$archive->getPrettyArchive();
}
?>