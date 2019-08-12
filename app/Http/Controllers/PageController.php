<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

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
    
    //Public Function buat view guidebook
    public function viewFusion2019(){
        return view('pages.guidebookFusion2019.index');
    }
    
    public function viewGuidebookCaseStudy(){
        return view('pages.guidebookFusion2019.caseStudy');
    }
    
    public function viewGuidebookInvest(){
        return view('pages.guidebookFusion2019.invest');
    }
    
    public function viewGuidebookShortMovie(){
        return view('pages.guidebookFusion2019.shortMovie');
    }
    
    //Debug
    public function debug(){
        return view('debug');
    }
}
