<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        return view('admins.posts.index', [
           'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('admins.posts.form');
    }

    public function store(StorePostRequest $request) // read!
    {
        //  $request->validate([
        //     'title' => 'required|max:255|min:3',
        //     'content' => 'required',
        // ]);
        //dd($request->all());
        Post::create($request->except(['_token']));
        return redirect(route('admin.posts'))->with('success', 'success Created');
    }

    public function edit()
    {
        
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}
