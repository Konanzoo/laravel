<?php

namespace App\Http\Controllers;

use App\Models\Post;

class ContactController
{
    public function index() {
        $posts = Post::withTrashed()->get();

        return view('contacts');
    }
}
