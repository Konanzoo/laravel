<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index() {
        $posts = Post::withTrashed()->get();

        dd($posts);
        return $str;
    }

    public function create() {
        $postsArr = [
            [
                'title' => 'Title of post from phpstorm',
                'content' => 'some interesting content',
                'image' => 'imageblabla.jpg',
                'likes' => '20',
                'is_published' => '1'
            ],
            [
                'title' => 'Another Title of post from phpstorm',
                'content' => 'Another some interesting content',
                'image' => 'another_imageblabla.jpg',
                'likes' => '50',
                'is_published' => '1'
            ],
        ];


        foreach ($postsArr as $post) {
            Post::create($post);
        }

    }

    public function update() {
        $post = Post::find(2);
//        dd($post->title);
        $post->update(
            [
                'title' => 'Updated... ' . $post->title,
                'content' => 'Updated... ' . $post->content,
                'image' => 'updated_' . $post->image,
                'likes' => $post->likes,
                'is_published' => $post->likes,
            ]
        );
        dd('updated');
    }

    public function delete() {
        $post = Post::find(3);
        $post->delete();
        dd('deleted');
    }
}
