<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
    //
    public function index(){
        $recentPost = Post::latest()->take(3)->get();
        return view('pages.index')->with('posts',$recentPost);
    }
    public function about(){
        return view('pages.about');
    }
    public function credits(){
        return view('pages.credits');
    }
    public function disaster(){
        return view('pages.disaster');
    }

}
