<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        $posts = $posts->map(function ($post) {
            if($post->cover_img) {
                $post->cover_img = asset("/storage/" . $post->cover_img);
            }
            return $post;
        });
        return response()->json($posts);
    }
}
