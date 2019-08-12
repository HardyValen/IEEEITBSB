<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\invest2019participant;


class Invest2019participantController extends Controller
{
    public function storeUser(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $invest = new invest2019participant;

        $user->isInvest = $request->isInvest;
        $user->save();

        $invest->subtheme = $request->subtheme;
        $invest->user_id = $user->id;
        $invest->email = $user->email;
        $invest->phone = $user->phoneNumber;
        $invest->lineID = $user->lineID;
        $invest->namaKetua = $user->name;
        $invest->nimKetua = $user->nim;
        $invest->teamName = $request->nama_tim;
        $invest->gelombang = 1;
        $invest->save();

        return redirect()->back()->with('message', 'You have been successfully registered '.$request->nama_tim.' as an Innovation Contest 2019 participant!');
    }

    public function updateTeam(Request $request){
        if($request->isMethod('post')){
            $invest = Auth::user()::find(Auth::user()->id)->invest2019participant;

            if($invest->namaAnggota1 == NULL){
                $invest->namaAnggota1 = $request->nama_anggota;
                $invest->nimAnggota1 = $request->nim_anggota;
                $invest->save();
            }
            else if($invest->namaAnggota2==NULL){
                $invest->namaAnggota2 = $request->nama_anggota;
                $invest->nimAnggota2 = $request->nim_anggota;
                $invest->save();
            }
            else {
                return redirect()->to('/dashboard/invest/manage-team')->with('message','Sorry, you cannot add more team member because the maximum team members allowed is 3 (three).');
            }
            return redirect()->to('/dashboard/invest/manage-team')->with('message', 'Added '.$request->nama_anggota.' as a new team member');
        }
        else{
            return view('dashboard.fusion-2019.invest.addteam')->with('message', NULL);
        }
    }

    // ================================================
    // Function buat upload file photos
    // ================================================

    public function viewUploadPhoto($id){
        return view('dashboard.fusion-2019.invest.photo')->with('id',$id);
    }

    public function postUploadPhoto(Request $request){
        $file1 = $request->file('photo');
        $file2 = $request->file('ktm');
        $invest = Auth::user()::find(Auth::user()->id)->invest2019participant;
        $name = ($request->anggota == 0 ? $invest->namaKetua : ($request->anggota == 1 ? $invest->namaAnggota1 : $invest->namaAnggota2)); //Nested Ternary Operator
        $memberStatus = ($request->anggota == 0 ? 'Ketua__' : 'anggota'.$request->anggota.'__');

        // Tambahan dari Hardy buat state isset_file, Deklarasi Variabel
        $user = User::find(Auth::user()->id);
        // End of Tambahan dari Hardy, Deklarasi Variabel

        if(($file1->getClientOriginalExtension()=="png" || $file1->getClientOriginalExtension()=="jpg" || $file1->getClientOriginalExtension()=="PNG" || $file1->getClientOriginalExtension()=="JPG")
        && ($file2->getClientOriginalExtension()=="png" || $file2->getClientOriginalExtension()=="jpg" || $file2->getClientOriginalExtension()=="PNG" || $file2->getClientOriginalExtension()=="JPG"))
        {
            $filename1 = $memberStatus.'_'.$name.'.'.$file1->getClientOriginalExtension();
            $filename2 = $memberStatus.'_'.$name.'.'.$file2->getClientOriginalExtension();

            $file1->storeAs('public/Fusion2019/Invest/'.$invest->subtheme.'/'.Auth::user()->email, 'Foto-'.$filename1);
            $file2->storeAs('public/Fusion2019/Invest/'.$invest->subtheme.'/'.Auth::user()->email, 'KTM-'.$filename2);
            
            //Tambahan Hardy buat isset
            if($request->anggota == 0){
                $invest->issetFotoKetua = $request->isset_photo;
                $invest->issetKTMKetua = $request->isset_ktm;
                $invest->urlFotoKetua = 'public/Fusion2019/Invest/'.$invest->subtheme.'/'.Auth::user()->email.'/Foto-'.$filename1;
                $invest->urlKTMKetua = 'public/Fusion2019/Invest/'.$invest->subtheme.'/'.Auth::user()->email.'/KTM-'.$filename2;
                $invest->save();
            }

            else if($request->anggota == 1){
                $invest->issetFotoAnggota1 = $request->isset_photo;
                $invest->issetKTMAnggota1 = $request->isset_ktm;
                $invest->urlFotoAnggota1 = 'public/Fusion2019/Invest/'.$invest->subtheme.'/'.Auth::user()->email.'/Foto-'.$filename1;
                $invest->urlKTMAnggota1 = 'public/Fusion2019/Invest/'.$invest->subtheme.'/'.Auth::user()->email.'/KTM-'.$filename2;
                $invest->save();
            }

            else if($request->anggota == 2){
                $invest->issetFotoAnggota2 = $request->isset_photo;
                $invest->issetKTMAnggota2 = $request->isset_ktm;
                $invest->urlFotoAnggota2 = 'public/Fusion2019/Invest/'.$invest->subtheme.'/'.Auth::user()->email.'/Foto-'.$filename1;
                $invest->urlKTMAnggota2 = 'public/Fusion2019/Invest/'.$invest->subtheme.'/'.Auth::user()->email.'/KTM-'.$filename2;
                $invest->save();
            }
            //End

            return redirect()->to('/dashboard/invest/manage-team')->with('message', 'Your files has been uploaded successfully');
        } else {
            return "<script>alert('FileType ERROR'); window.history.back();</script>";
        }    
    }

    public function viewGuidebook()
    {
        if(Auth::check()){
            return view('dashboard.fusion-2019.invest.guidebook');
        } else {
            return redirect('login');
        }
    }

    public function viewManageTeam()
    {
        if(Auth::check()){
            return view('dashboard.fusion-2019.invest.manageTeam');
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
                $file = $request->file('submission');
                $file1 = $request->file('invoice');
                
                $invest = Auth::user()::find(Auth::user()->id)->invest2019participant;

                if(($file->getClientOriginalExtension()=="pdf") && ($file1->getClientOriginalExtension()=="png" || $file1->getClientOriginalExtension()=="jpg"))
                {   
                    $filename = 'IEEEITBSB2019_InnovationContest_Preliminary_'.$invest->teamName.'.';
                    $file->storeAs('public/Fusion2019/Invest/'.$invest->subtheme.'/'.Auth::user()->email, $filename.$file->getClientOriginalExtension());
                    $file1->storeAs('public/Fusion2019/Invest/'.$invest->subtheme.'/'.Auth::user()->email, 'Invoice.'.$file1->getClientOriginalExtension());

                    //Tambahan dari Hardy buat isset
                    $invest->issetEssay = $request->isset_essay;
                    $invest->issetInvoice = $request->isset_invoice;
                    $invest->urlEssay = 'public/Fusion2019/Invest/'.$invest->subtheme.'/'.Auth::user()->email.'/'.$filename.$file->getClientOriginalExtension();
                    $invest->urlInvoice = 'public/Fusion2019/Invest/'.$invest->subtheme.'/'.Auth::user()->email.'/Invoice.'.$file1->getClientOriginalExtension();
                    $invest->save();
                    //End

                    return redirect()->to('/dashboard/invest')->with('message', 'Your files has been uploaded successfully');
                }
                else
                {
                return "<script>alert('Sorry, please reupload the files with appropriate extension'); window.history.back();</script>";
                }
            }
            else{
                return view('dashboard.fusion-2019.invest.uploadFiles')->with('message', NULL);
            }
        } else {
            return redirect('login');
        }
    }
}
