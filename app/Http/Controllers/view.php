<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class view extends Controller
{
    public function showsingle($id){
        $post=Post::find($id);
        return view('view',['post'=>$post]);
    }
}
