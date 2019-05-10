<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Post;



class BlogController extends Controller
{
    public function list(){
        $posts = DB::table('posts')->get();
        return view('blog.AllPost')->with('posts',$posts);
    }

    public function post($id){
        $post = DB::table('posts')->where('id',$id)->first();
        return view('blog.post')->with('post',$post);
    }

    public function submit(Request $request){
        $post = new Post;
        $post->title = $request->title;
        $post->body_html = $request->editor;
        $post->summary = $request->summary;
        $post->save();
        return redirect('/blog/'.$post->id);
    }
    
    public function form(Request $request){
        return view('blog.form');
    }

    public function edit($id){
        $post = DB::table('posts')->where('id',$id)->first();
        return view('blog.edit')->with('post',$post);
    }

    public function update($id, Request $request){
        DB::table('posts')->where('id',$id)->update(['title'=>$request->title,'body_html'=>$request->editor]);
        return redirect('/blog/'.$id);
    }
    public function delete($id){
        DB::table('posts')->where('id',$id)->delete();
        return redirect('/blog');
    }
}
