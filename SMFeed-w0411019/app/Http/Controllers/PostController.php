<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{


    public function create(){
        return view('post.create');
    }

    public function store(){
        $data = request()->validate([
            'title'=>'required',
            'content'=>'required',
        ]);

        $post = new Post();
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->image = \request()->input('image');
        $post->created_at = Carbon::now();
        $post->updated_at = Carbon::now();
        $post->created_by = Auth::id();
        $post->save();

        return redirect('/home');
    }


    public function index(Post $posts){

        $posts = $posts->orderBy('created_at','DESC')->get();

        return view('home',compact('posts'));

    }


    public function edit(Post $post){

        return view('post.edit',compact('post'));
    }


    public function update(){
        $data = request()->validate([
            'title'=>'required',
            'content'=>'required',
        ]);

        $post = Post::where('id','=',\request()->id)->first();
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->image = \request()->input('image');
        $post->updated_at = Carbon::now();
        $post->save();

        return redirect('/home');
    }

    public function destroy(Post $post){

        $post->deleted_by = Auth::user()->id;
        $post->save();
        $post->delete();

        return redirect('/home');
    }
}
