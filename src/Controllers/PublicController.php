<?php

namespace App\Controllers;

use App\Models\Post;

class PublicController {
    public function home(){
        $posts = Post::all();
        // $users = User::all();
        view('home', compact('posts'));
        
    }

    public function uploadForm(){
        view('upload');
    }

    public function upload(){
        $img = $_FILES['image'];
        $extension = explode('.',$img['name']);
        $extension = $extension[count($extension)-1];
        $hash = md5($img['name'].microtime());
        move_uploaded_file($img['tmp_name'], 'public/uploads/'. $hash. '.' . $extension);
}

public function test(){

}
}
