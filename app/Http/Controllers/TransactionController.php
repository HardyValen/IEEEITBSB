<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class TransactionController extends Controller
{
    public function form($id){
        return view('transaction.form')->with('id',$id);
    }

    public function essay(){
        return view('transaction.essay');
    }

    public function post(Request $request){
        $file1 = $request->file('photo');
        $file2 = $request->file('ktm');

        // Tambahan dari Hardy buat state isset_file, Deklarasi Variabel
        $user = User::find(Auth::user()->id);
        // End of Tambahan dari Hardy, Deklarasi Variabel

        if(($file1->getClientOriginalExtension()=="png" || $file1->getClientOriginalExtension()=="jpg")
        && ($file2->getClientOriginalExtension()=="png" || $file2->getClientOriginalExtension()=="jpg")) {
            $filename1 = Auth::user()->email .  '_photo_'.$request->anggota.'.' . $file1->getClientOriginalExtension();
            $filename2 = Auth::user()->email .  '_ktm_'.$request->anggota.'.' . $file2->getClientOriginalExtension();
            
            //Tambahan Hardy buat isset
            if($request->anggota == 0 and Auth::user()->isset_photo_anggota0 == 0 and Auth::user()->isset_ktm_anggota0 == 0){
                $user->isset_photo_anggota0 = $request->isset_photo;
                $user->isset_ktm_anggota0 = $request->isset_ktm;
                $user->save();
            }

            else if($request->anggota == 1 and Auth::user()->isset_photo_anggota1 == 0 and Auth::user()->isset_ktm_anggota1 == 0){
                $user->isset_photo_anggota1 = $request->isset_photo;
                $user->isset_ktm_anggota1 = $request->isset_ktm;
                $user->save();
            }

            else if($request->anggota == 2 and Auth::user()->isset_photo_anggota2 == 0 and Auth::user()->isset_ktm_anggota2 == 0){
                $user->isset_photo_anggota2 = $request->isset_photo;
                $user->isset_ktm_anggota2 = $request->isset_ktm;
                $user->save();
            }
            //End

            $file1->storeAs('photos/'.Auth::user()->email, $filename1);
            $file2->storeAs('photos/'.Auth::user()->email, $filename2);
            return redirect()->back()->with('message', 'Your files has been uploaded successfully');
        } else {
            return "<script>alert('FileType ERROR'); window.history.back();</script>";
        }    
    }

    public function submit(Request $request){
        $file = $request->file('submission');
        $file1 = $request->file('instagram');

        // Tambahan dari Hardy buat state isset_file, Deklarasi Variabel
        $user = User::find(Auth::user()->id);
        // End of Tambahan dari Hardy, Deklarasi Variabel

        if(($file->getClientOriginalExtension()=="pdf") /*&& ($file1->getClientOriginalExtension()=="png" || $file1->getClientOriginalExtension()=="jpg")*/)
        {
            //Tambahan dari Hardy buat isset
            $user->isset_essay = $request->isset_essay;
            $user->isset_instagram_post = $request->isset_instagram_post;
            $user->is_verified = $request->is_verified;
            $user->save();
            //End
            
            $filename = Auth::user()->email.'_submission.'.$file->getClientOriginalExtension();
            $file->storeAs('submission/'.Auth::user()->email,$filename);

            /*$filename1 = Auth::user()->email.'_instagram.'.$file1->getClientOriginalExtension();
            $file1->storeAs('submission/'.Auth::user()->email,$filename1);*/

            return redirect()->back()->with('message', 'Your files has been uploaded successfully');
        }
        else
        {
        return "<script>alert('Sorry, please reupload the files with appropriate extension'); window.history.back();</script>";
        }
    }
}
