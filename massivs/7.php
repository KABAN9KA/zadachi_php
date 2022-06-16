<!-- 7 задача масивы -->
<form method="post">
    <input type="text" name="array">
    <input type="submit">
</form>
<?php
$arr = !empty($_POST['array']) ? explode(' ', $_POST['array']) : [];
$result = true;
$flag = false;
for($i = 0; $i + 2 < count($arr); $i++) {
    if($arr[$i] > $arr[$i + 1]) {
        if($flag || $arr[$i] > $arr[$i + 2]) {
            $result = false;
            break;
        } else {
            $flag = true;
        }
    }
}
echo $result ? 'Yes' : 'No';