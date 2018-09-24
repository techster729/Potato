<?php

class PostsController {

    public function home()
    {
        $posts = App::get('database')->selectAll('posts');
        return view('index', compact('posts'));
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        App::get('database')->insert('posts', [
            'title' => $_POST['title'],
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
        
        echo 'Post created successfully ';
        echo '<a href="http://cphp.check">Go back</a>';
    }
}