<?php

namespace App\Http\Controllers;

use App\Models\Post;

class MainController
{
    public function index() {
        $posts = Post::withTrashed()->get();

        return view('main');
    }
}
