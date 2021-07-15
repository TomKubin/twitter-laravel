<?php
namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller{

    public function getDashboard(){
        $posts = post::orderBy('created_at', 'desc')->get();
        //return view('dashboard', ['posts' => $posts]);
        return view('dashboard')->with('posts', $posts);
    }

    public function postCreatePost(Request $request){
        $post = new post();
        $post->body = $request['body'];
        $request->user()->posts()->save($post);
        return redirect()->route('dashboard');
    }
}