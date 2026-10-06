<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

class PublicController
{
    public function index()
    {
        $title = 'World';
        $posts = Post::where('category', 'world');
        view('index', compact('title', 'posts'));
    }

    public function us()
    {
        $title = 'U.S';
        $posts = Post::where('category', 'us');
        view('us', compact('title', 'posts'));
    }

    public function test() {
        $db = new DB();
    }

    public function form() {
        
        view('form');
    }

    public function answer(){
        dump($_GET, $_POST);
    }
    public function technology()
    {
        $title = 'Technology';
        $posts = Post::where('category', 'technology');
        view('technology', compact('title', 'posts'));
    }
    public function posts()
    {
        $title = 'Posts';
        $posts = Post::all();
        view('posts', compact('title', 'posts'));
    }
}
