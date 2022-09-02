<?php
$content = file_get_contents('list.txt');
$items = explode("\n", $content);
array_pop($items);
foreach($items as $item){
    var_dump($item);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ahaaa</title>
    </head>
    <body>
        <form action="/add.php" method="POST">
            <input type="text" name="newitem">
            <input type="submit" value="Add">
        </form>
        <ul>
            <?php

                foreach($items as $item):
            ?>
            <li>
                <?=$item?>
            </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>