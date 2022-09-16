<?php

namespace App\Controllers;

use App\Models\Post;

class PublicController {
    public function home(){
        $posts = Post::all();
        // $users = User::all();
        view('home', compact('posts'));
        
    }
}
