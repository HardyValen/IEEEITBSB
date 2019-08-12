<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

use Auth;
use App\User;
use App\Post;


class BlogController extends Controller
{
    // --- Read, Accessible to everyone (Guest, Member, Admin)
        // --* View All Articles
        public function listBlogPost(){
            $posts = Post::orderBy('id', 'desc')->paginate(8);
            return view('blog.AllPost')->with('posts',$posts);
        }

        // --* View An Article
        public function articleBlogPost($id){
            $post = DB::table('posts')->where('id',$id)->first();

            $maxID =  Post::find(\DB::table('posts')->max('id'));
            $minID =  Post::find(\DB::table('posts')->min('id'));
            $previous = Post::where('id', '<', $id)->max('id');
            $next = Post::where('id', '>', $id)->min('id');
            
            return view('blog.post')->with('post',$post)->with('id', $id)->with('ID', [$maxID, $minID])->with('previous', $previous)->with('next', $next);
        }

    // --- Create, Admin Only
    public function createBlogPost(Request $request){
        if(Auth::check()){
            if(Auth::user()->isAdmin == 1){
                if($request->isMethod('post')){
                        $post = new Post;
                        $post->title = $request->title;
                        $post->body_html = $request->editor;
                        $post->summary = $request->summary;
                        $post->save();
                    return redirect()->to('/dashboard/admin')->with('message', 'You have successfully posted an article titled: '.$post->title.'');
                } else {
                    return view('blog.blog-create');
                }
            } else {
                return redirect()->to('/dashboard/admin');
            }
        } else {
            return redirect('login');
        } 
    }

    // --- View All Update,
        // --* View All Articles
        public function viewAllUpdateBlogPost(){
            if(Auth::check()){
                if(Auth::user()->isAdmin == 1){
                    $posts = Post::orderBy('id', 'desc')->paginate(8);
                    return view('blog.viewUpdateAllPost')->with('posts',$posts);
                } else {
                    return redirect()->to('/dashboard');
                }
            } else {
                return redirect('login');
            } 
        }

        // --* View An Editable Article
        public function updateBlogPost($id, Request $request){
            if(Auth::check()){
                if(Auth::user()->isAdmin == 1){
                    if($request->isMethod('post')){
                            DB::table('posts')->where('id',$id)->update(['title'=>$request->title,'summary'=>$request->summary,'body_html'=>$request->editor]);
                            return redirect('/blog/'.$id);
                    } else {
                        $post = DB::table('posts')->where('id',$id)->first();
                        return view('blog.edit')->with('post',$post);
                    }
                } else {
                    return redirect()->to('/dashboard/admin');
                }
            } else {
                return redirect('login');
            }
        }


    // -- Edit
    public function edit($id){
        $post = DB::table('posts')->where('id',$id)->first();
        return view('blog.edit')->with('post',$post);
    }

    public function update($id, Request $request){
        DB::table('posts')->where('id',$id)->update(['title'=>$request->title,'body_html'=>$request->editor]);
        return redirect('/blog/'.$id);
    }
    public function delete($id){
        if(Auth::check()){
            if(Auth::user()->isAdmin == 1){
                DB::table('posts')->where('id',$id)->delete();
                return redirect('/dashboard/admin/blog-update')->with('message', "Post is successfully deleted");
            } else {
                return redirect()->to('/dashboard/admin');
            }
        } else {
            return redirect('login');
        }
    }
}
