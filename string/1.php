<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset= utf-8">
        <head>
    <body>
        <form  method='post'>
        <input type = 'text' name='text'>
        <br>
        <input type='text' name='verb'>
        <br>
        <input type='submit' name='ok'>
        </form>
    </body>
</html>
<?php
if(isset($_POST['ok']))
{
    $text = $_POST['text'];
    $verb = $_POST['verb'];
    $check = "";
    echo "слово <b>{$verb}</b> получаем из слова <b>{$text}</b> <br />";

    empty($text) && empty($verb) ? exit : '';

    for ($i = 0; $i < strlen($verb); $i++)
    {
        $smb = strpos($text, $verb[$i]); 
        if( $smb !== FALSE ) $check .= $verb[$i]; 
        else break; 
        $text = substr($text, 0, $smb).substr($text, $smb+1); 
    }

strcasecmp($verb, $check) != 0 ? print("нет") : print("да");

}