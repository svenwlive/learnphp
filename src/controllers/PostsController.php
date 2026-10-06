<?php

namespace App\Controllers;
use App\Models\Post;

class PostsController
{
    public function index()
    {
        $title = 'Posts';
        $posts = Post::all();
        view('posts/index', compact('title', 'posts'));
    }
    public function create() {
        view('posts/create');
    }
    public function store() {
        $post = new Post();
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->author = $_POST['author'];
        $post->category = $_POST['category'];
        $post->save();
        redirect('/admin/posts');
    }
}