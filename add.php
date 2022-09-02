<?php
var_dump($_POST['newitem']);
$file = fopen('list.txt', 'a');
fwrite($file, $_POST['newitem'] . "\n");
fclose($file);
header('Location: /index.php');
die();  