<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Gate;

class PostController extends Controller
{
    publica function show(Post $post)
    {
    	//auth()->loginUsingId(1);
    	auth()->logout();

    	if(Gate::denies('show-post', $post)) {
    		abort(403, 'Sorry');
    	}

    	return view('posts.show', compact('post'))
    }
}
