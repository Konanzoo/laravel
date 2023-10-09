<?php

namespace App\Http\Controllers;

use App\Models\Post;

class AboutController
{
    public function index() {
        $posts = Post::withTrashed()->get();

        return view('about');
    }
}
