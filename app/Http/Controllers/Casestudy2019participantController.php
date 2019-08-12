<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\casestudy2019participant;


class Casestudy2019participantController extends Controller
{

    public function storeUser(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $casestudy = new casestudy2019participant;

        $user->isCaseStudy = $request->isCaseStudy;
        $user->save();

        $casestudy->user_id = $user->id;
        $casestudy->namaKetua = $user->name;
        $casestudy->nimKetua = $user->nim;
        $casestudy->email = $user->email;
        $casestudy->phone = $user->phoneNumber;
        $casestudy->lineID = $user->lineID;
        $casestudy->teamName = $request->nama_tim;
        $casestudy->gelombang = 1;
        $casestudy->save();

        return redirect()->back()->with('message', 'You have been successfully registered '.$request->nama_tim.' as a Case Study 2019 participant!');
    }

    public function updateTeam(Request $request){
        if($request->isMethod('post')){
            $casestudy = Auth::user()::find(Auth::user()->id)->casestudy2019participant;

            if($casestudy->namaAnggota1 == NULL){
                $casestudy->namaAnggota1 = $request->nama_anggota;
                $casestudy->nimAnggota1 = $request->nim_anggota;
                $casestudy->save();
            }
            else if($casestudy->namaAnggota2==NULL){
                $casestudy->namaAnggota2 = $request->nama_anggota;
                $casestudy->nimAnggota2 = $request->nim_anggota;
                $casestudy->save();
            }
            else {
                return redirect()->to('/dashboard/case-study/manage-team')->with('message','Sorry, you cannot add more team member because the maximum team members allowed is 3 (three).');
            }
            return redirect()->to('/dashboard/case-study/manage-team')->with('message', 'Added '.$request->nama_anggota.' as a new team member');
        }
        else{
            return view('dashboard.fusion-2019.case-study.addteam')->with('message', NULL);
        }
    }

    // ================================================
    // Function buat upload file photos
    // ================================================

    public function viewUploadPhoto($id){
        return view('dashboard.fusion-2019.case-study.photo')->with('id',$id);
    }

    public function postUploadPhoto(Request $request){
        $file1 = $request->file('photo');
        $file2 = $request->file('ktm');
        $casestudy = Auth::user()::find(Auth::user()->id)->casestudy2019participant;
        $name = ($request->anggota == 0 ? $casestudy->namaKetua : ($request->anggota == 1 ? $casestudy->namaAnggota1 : $casestudy->namaAnggota2)); //Nested Ternary Operator
        $memberStatus = ($request->anggota == 0 ? 'Ketua__' : 'anggota'.$request->anggota.'__');

        // Tambahan dari Hardy buat state isset_file, Deklarasi Variabel
        $user = User::find(Auth::user()->id);
        // End of Tambahan dari Hardy, Deklarasi Variabel

        if(($file1->getClientOriginalExtension()=="png" || $file1->getClientOriginalExtension()=="jpg" || $file1->getClientOriginalExtension()=="PNG" || $file1->getClientOriginalExtension()=="JPG")
        && ($file2->getClientOriginalExtension()=="png" || $file2->getClientOriginalExtension()=="jpg" || $file2->getClientOriginalExtension()=="PNG" || $file2->getClientOriginalExtension()=="JPG"))
        {
            $filename1 = $memberStatus.'_'.$name.'.'.$file1->getClientOriginalExtension();
            $filename2 = $memberStatus.'_'.$name.'.'.$file2->getClientOriginalExtension();

            $file1->storeAs('public/Fusion2019/CaseStudy/'.Auth::user()->email, 'Foto-'.$filename1);
            $file2->storeAs('public/Fusion2019/CaseStudy/'.Auth::user()->email, 'KTM-'.$filename2);

            //Tambahan Hardy buat isset
            if($request->anggota == 0){
                $casestudy->issetFotoKetua = $request->isset_photo;
                $casestudy->issetKTMKetua = $request->isset_ktm;
                $casestudy->urlFotoKetua = 'public/Fusion2019/CaseStudy/'.Auth::user()->email.'/Foto-'.$filename1;
                $casestudy->urlKTMKetua = 'public/Fusion2019/CaseStudy/'.Auth::user()->email.'/KTM-'.$filename2;
                $casestudy->save();
            }

            else if($request->anggota == 1){
                $casestudy->issetFotoAnggota1 = $request->isset_photo;
                $casestudy->issetKTMAnggota1 = $request->isset_ktm;
                $casestudy->urlFotoAnggota1 = 'public/Fusion2019/CaseStudy/'.Auth::user()->email.'/Foto-'.$filename1;
                $casestudy->urlKTMAnggota1 = 'public/Fusion2019/CaseStudy/'.Auth::user()->email.'/KTM-'.$filename2;
                $casestudy->save();
            }

            else if($request->anggota == 2){
                $casestudy->issetFotoAnggota2 = $request->isset_photo;
                $casestudy->issetKTMAnggota2 = $request->isset_ktm;
                $casestudy->urlFotoAnggota2 = 'public/Fusion2019/CaseStudy/'.Auth::user()->email.'/Foto-'.$filename1;
                $casestudy->urlKTMAnggota2 = 'public/Fusion2019/CaseStudy/'.Auth::user()->email.'/KTM-'.$filename2;
                $casestudy->save();
            }
            //End

            return redirect()->to('/dashboard/case-study/manage-team')->with('message', 'Your files has been uploaded successfully');
        } else {
            return "<script>alert('FileType ERROR'); window.history.back();</script>";
        }    
    }

    public function viewGuidebook()
    {
        if(Auth::check()){
            return view('dashboard.fusion-2019.case-study.guidebook');
        } else {
            return redirect('login');
        }
    }

    public function viewManageTeam()
    {
        if(Auth::check()){
            return view('dashboard.fusion-2019.case-study.manageTeam');
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
                
                $casestudy = Auth::user()::find(Auth::user()->id)->casestudy2019participant;

                if(($file->getClientOriginalExtension()=="pdf") && ($file1->getClientOriginalExtension()=="png" || $file1->getClientOriginalExtension()=="jpg"))
                {   
                    $filename = 'IEEEITBSB2019_CaseStudyCompetition_Preliminary_'.$casestudy->teamName.'.';
                    $file->storeAs('public/Fusion2019/CaseStudy/'.Auth::user()->email, $filename.$file->getClientOriginalExtension());
                    $file1->storeAs('public/Fusion2019/CaseStudy/'.Auth::user()->email, 'Invoice.'.$file1->getClientOriginalExtension());

                    //Tambahan dari Hardy buat isset
                    $casestudy->preliminaryScore = NULL;
                    $casestudy->issetEssay = $request->isset_essay;
                    $casestudy->issetInvoice = $request->isset_invoice;
                    $casestudy->urlEssay = 'public/Fusion2019/CaseStudy/'.Auth::user()->email.'/'.$filename.$file->getClientOriginalExtension();
                    $casestudy->urlInvoice = 'public/Fusion2019/CaseStudy/'.Auth::user()->email.'/Invoice.'.$file1->getClientOriginalExtension();
                    $casestudy->save();
                    //End

                    return redirect()->to('/dashboard/case-study')->with('message', 'Your files has been uploaded successfully');
                }
                else
                {
                return "<script>alert('Sorry, please reupload the files with appropriate extension'); window.history.back();</script>";
                }
            }
            else{
                return view('dashboard.fusion-2019.case-study.uploadFiles')->with('message', NULL);
            }
        } else {
            return redirect('login');
        }
    }
}
