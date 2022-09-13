<?php

namespace App\Controllers;
class PublicController {
    public function home(){
        $db = new App\DB;
        $posts = $db->all('posts');
        //view('home', compact('posts'));
        
    }
}
