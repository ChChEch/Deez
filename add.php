<?php
if(trim($_POST['title']) && trim($_POST['body'])) {
    if(file_exists('posts.json')){
    $json = file_get_contents('posts.json');
    $posts = json_decode($json, true);
}   else {
    $posts = [];
}
    $posts[] = [
        'title' => $_POST['title'], 
        'body' => $_POST['body']
];
    $json = json_encode($posts);
    $file = fopen('list.txt', 'w');
    fwrite($file, $json);
    fclose($file);
}

header('Location: /index.php');
die();  