<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiPostController extends Controller
{
    public function index(Request $request)
    {
        // $res = Post::all();
        // return response()->json([
        //     'posts ' => $res]);

        $defaultLimit = 20;
        $page = $request->get('page', 1);
        $limit = $request->get('limit', $defaultLimit);
        if (empty($limit)) {
            $limit = $defaultLimit;
        }
        $posts = Post::offset(($page - 1) * $limit)->limit($limit)->get();
        $postsNumber = Post::count('id');
        return response()->json([
            'posts' => $posts,
            'pages' => ceil($postsNumber / $limit)
        ]);


    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tittle' => 'required',
            'content' => 'required'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'success ' => false,
                'error' => $validator->getMessageBag()->first()
            ]);
        }

        Post::create($request->all());
        return response()->json([
            'success ' => true]);

    }

    public function update($id, Request $request)
    {
       //dd(Post::all());
        $rules = [];
        if($request->has('title'))
        {
            $rules['title'] = 'required|max:3,255';
        }

        if($request->has('content'))
        {
            $rules['content'] = 'required|max:1024';
        }
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails())
        {
            return response()->json([
                'success ' => false,
                'error' => $validator->getMessageBag()->first()
            ]);
        }

        Post::where('id', $id)
            ->update($request->all());

        return response()->json([
            'success ' => true
        ]);
    }


    public function destroy($id)
    {
        Post::destroy($id);
        return response()->json([
            'success ' => true
        ]);
    }
}
