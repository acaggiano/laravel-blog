<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post) {
    	$this->validate(request(), ['body'  => 'required|min:2']);
    	if(auth()->user()){
    		auth()->user()->addComment(request('body'), $post);

    		return back();
		}
		else {
			return back()->withErrors(['Only users can comment, Please log in or sign up.']);
		}
    	
    }
}
