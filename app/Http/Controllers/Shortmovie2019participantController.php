<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\shortmovie2019participant;


class Shortmovie2019participantController extends Controller
{
    public function storeUser(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $shortmovie = new shortmovie2019participant;

        $user->isShortMovie = $request->isShortMovie;
        $user->save();

        $shortmovie->subtheme = $request->subtheme;
        $shortmovie->user_id = $user->id;
        $shortmovie->namaKetua = $user->name;
        $shortmovie->nimKetua = $user->nim;
        $shortmovie->email = $user->email;
        $shortmovie->phone = $user->phoneNumber;
        $shortmovie->lineID = $user->lineID;
        $shortmovie->teamName = $request->nama_tim;
        $shortmovie->save();

        return redirect()->back()->with('message', 'You have been successfully registered '.$request->nama_tim.' as a Short Movie Contest 2019 participant!');
    }

    public function updateTeam(Request $request){
        if($request->isMethod('post')){
            $shortmovie = Auth::user()::find(Auth::user()->id)->shortmovie2019participant;

            if($shortmovie->namaAnggota1 == NULL){
                $shortmovie->namaAnggota1 = $request->nama_anggota;
                $shortmovie->nimAnggota1 = $request->nim_anggota;
                $shortmovie->save();
            }
            else if($shortmovie->namaAnggota2==NULL){
                $shortmovie->namaAnggota2 = $request->nama_anggota;
                $shortmovie->nimAnggota2 = $request->nim_anggota;
                $shortmovie->save();
            }
            else {
                return redirect()->to('/dashboard/short-movie/manage-team')->with('message','Sorry, you cannot add more team member because the maximum team members allowed is 3 (three).');
            }
            return redirect()->to('/dashboard/short-movie/manage-team')->with('message', 'Added '.$request->nama_anggota.' as a new team member');
        }
        else{
            return view('dashboard.fusion-2019.short-movie.addteam')->with('message', NULL);
        }
    }

    // ================================================
    // Function buat upload file photos
    // ================================================

    public function viewUploadPhoto($id){
        return view('dashboard.fusion-2019.short-movie.photo')->with('id',$id);
    }

    public function postUploadPhoto(Request $request){
        $file1 = $request->file('letter');
        $file2 = $request->file('invoice');
        $shortmovie = Auth::user()::find(Auth::user()->id)->shortmovie2019participant;

        if(($file1->getClientOriginalExtension()=="png" || $file1->getClientOriginalExtension()=="jpg" || $file1->getClientOriginalExtension()=="PNG" || $file1->getClientOriginalExtension()=="JPG")
        && ($file2->getClientOriginalExtension()=="png" || $file2->getClientOriginalExtension()=="jpg" || $file2->getClientOriginalExtension()=="PNG" || $file2->getClientOriginalExtension()=="JPG"))
        {
            $filename1 = 'Payment_SM_'.Auth::user()->afiliasi.'_'.$shortmovie->teamName.'.'.$file1->getClientOriginalExtension();
            $filename2 = 'Letter_SM_'.Auth::user()->afiliasi.'_'.$shortmovie->teamName.'.'.$file2->getClientOriginalExtension();
            
            $file1->storeAs('public/Fusion2019/ShortMovie/'.$shortmovie->subtheme.'/'.Auth::user()->email, $filename1);
            $file2->storeAs('public/Fusion2019/ShortMovie/'.$shortmovie->subtheme.'/'.Auth::user()->email, $filename2);

            $shortmovie->issetLetterOfRecommendation = $request->isset_letter;
            $shortmovie->issetInvoice = $request->isset_invoice;
            $shortmovie->urlLetterOfRecommendation = 'public/Fusion2019/ShortMovie/'.$shortmovie->subtheme.'/'.Auth::user()->email.'/'.$filename1;
            $shortmovie->urlInvoice = 'public/Fusion2019/ShortMovie/'.$shortmovie->subtheme.'/'.Auth::user()->email.'/'.$filename2;
            $shortmovie->save();
            //End

            return redirect()->to('/dashboard/short-movie/manage-team')->with('message', 'Your files has been uploaded successfully');
        } else {
            return "<script>alert('FileType ERROR'); window.history.back();</script>";
        }    
    }

    public function viewGuidebook()
    {
        if(Auth::check()){
            return view('dashboard.fusion-2019.short-movie.guidebook');
        } else {
            return redirect('login');
        }
    }

    public function viewManageTeam()
    {
        if(Auth::check()){
            return view('dashboard.fusion-2019.short-movie.manageTeam');
        } else {
            return redirect('login');
        }
    }

    // ================================================
    // Function buat upload essay dan invoice
    // ================================================

    public function viewUploadFiles(Request $request)
    {
        if(Auth::check()){
            if($request->isMethod('post')){
                $shortmovie = Auth::user()::find(Auth::user()->id)->shortmovie2019participant;
                
                //Tambahan dari Hardy buat isset
                $shortmovie->issetURL = 1;
                $shortmovie->URL = $request->youtubeURL;
                $shortmovie->save();
                //End

                return redirect()->to('/dashboard/short-movie/manage-team')->with('message', 'Your URL has been submitted successfully');
            }
            else{
                return view('dashboard.fusion-2019.short-movie.uploadFiles')->with('message', NULL);
            }
        } else {
            return redirect('login');
        }
    }
}
