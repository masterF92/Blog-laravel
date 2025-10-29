<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // return "Liste des articles";
        return view('posts.index', [
            'posts' => Post::latest()->paginate(4),
            ]);
    }


      /**
     * Display the specified resource.
     */
    public function show(Post $post): View
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }
}
