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
    public function show($postid)
    {
        //todo
        return $postid;
    }
}
