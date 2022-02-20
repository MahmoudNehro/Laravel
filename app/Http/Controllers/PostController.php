<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
     public function index()
    {
        $posts = [
            ['id' => 1,'title' => 'first post', 'posted_by' => 'mahmoud', 'created_at' => '2022-02-20 10:00' ],
            ['id' => 2,'title' => 'second post', 'posted_by' => 'mohamed', 'created_at' => '2022-02-20 12:00' ]
        ];
        return view('posts.index', [
            'posts' => $posts,

        ]);
    }
    public function create()
    {
        return view('posts.create');
    }
   
    public function store()
    {
        $requestdata = request()->all();
        // dd($requestdata);
        //todo
        //store request data
        //redirection to posts.index
        return redirect()->route('posts.index');

    }
    public function show($postId)
    {
        $post = $this->getPost($postId);
        return view('posts.show', [ 'post' => $post ]);
    }

    public function edit($postId)
    {
        $post = $this->getPost($postId);
        return view('posts.edit', [ 'post' => $post ]);
    }

    public function update()
    {

        return redirect()->route('posts.index');
    }
    public function delete()
    {
        return redirect()->route('posts.index');
    }

    public function getPosts(){

        return
        [
            ['id' => 1, 'title' => 'first post', 'description' => 'first post describtion', 'posted_by' => 'Mahmoud', 'email' => 'mahmoud@mail.com', 'created_at' => '2022-02-19 5:00:00'],
            ['id' => 2, 'title' => 'second post', 'description' => 'second post describtion', 'posted_by' => 'Nehro', 'email' => 'nehro@gmail.com', 'created_at' => '2022-02-19 06:00:30'],
        ];
    }

    public function getPost($id)
    {
        $posts = $this->getPosts();
        foreach ($posts as $post) {
            if ($post['id'] == $id) {
                return $post;
            }
        }
        return null;
    }
}
