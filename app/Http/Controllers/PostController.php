<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index() {
       return Post::all();
    }

    public function store(request $request){
        $info=$request->validate([
        'user_id'=>'required',
        'title'=>'required',
        'content'=>'required',
        ]);
        $prfl=Post::create($info);
        return response()->json($prfl);
    }
}
