<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\casestudy2019participant;
use App\invest2019participant;
use App\shortmovie2019participant;


class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            if(Auth::user()->isAdmin == 1){
                return redirect()->to('/dashboard/admin');
            }
            else {
                return view('dashboard.normal');
            }
        } else {
            return redirect('login');
        }
    }

    public function guidebookdisasterhack()
    {
        if(Auth::check()){
            return view('dashboard.disaster-hack.guidebook');
        } else {
            return redirect('login');
        }
    }

    public function teaminfo()
    {
        if(Auth::check()){
            return view('dashboard.disaster-hack.team-info');
        } else {
            return redirect('login');
        }
    }

    public function fileupload()
    {
        if(Auth::check()){
            return view('dashboard.disaster-hack.file-upload');
        } else {
            return redirect('login');
        }
    }

    // -- USER SETTINGS
    public function showUserProfile(){
        if(Auth::check()){
            return view('dashboard.user-profile.user-profile');
        } else {
            return redirect('login');
        }
    }

    public function editProfile(Request $request){
        if(Auth::check()){
            return view('dashboard.user-profile.edit-profile');
        } else {
            return redirect('login');
        }
    }
    
    // -- VIEW EXTERNAL FILES
    public function viewExternalFiles(){
        if(Auth::check()){
            return view('dashboard.external-files');
        } else {
            return redirect('login');
        }
    }

    public function showChangePasswordForm(){
        if(Auth::check()){
            return view('dashboard.user-profile.change-pass');
        } else {
            return redirect('login');
        }
    }

    public function changePassword(Request $request){
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");
    }

    // ==================================== //
    // IEEE FUSION 2019 Competitions ------ //
    // ==================================== //

    public function caseStudy()
    {
        if(Auth::check()){
            return view('dashboard.fusion-2019.case-study.index');
        } else {
            return redirect('login');
        }
    }

    public function invest()
    {
        if(Auth::check()){
            return view('dashboard.fusion-2019.invest.index');
        } else {
            return redirect('login');
        }
    }

    public function shortMovie()
    {
        if(Auth::check()){
            return view('dashboard.fusion-2019.short-movie.index');
        } else {
            return redirect('login');
        }
    }

    public function viewFAQ()
    {
        if(Auth::check()){
            return view('dashboard.faq');
        } else {
            return redirect('login');
        }
    }

    public function viewGuidebook()
    {
        if(Auth::check()){
            return view('dashboard.fusion-2019.guidebook');
        } else {
            return redirect('login');
        }
    }

    // ==================================== //
    // Admin Dashboard -------------------- //
    // ==================================== //

    public function indexAdmin()
    {
        if(Auth::check()){
            if(Auth::user()->isAdmin == 1){
                return view('dashboard.user-admin.index');
            }
            else {
                return redirect()->to('/dashboard')->with('message', 'Sorry, you cannot access the admin page.');
            }
        } else {
            return redirect('login');
        }
    }

    public function viewAdminCaseStudy()
    {
        if(Auth::check()){
            if(Auth::user()->isAdmin == 1){
                $users = casestudy2019participant::orderBy('id', 'desc')->paginate(8);

                return view('dashboard.user-admin.viewCaseStudy')->with('users',$users);
            }
            else {
                return redirect()->to('/dashboard')->with('message', 'Sorry, you cannot access the admin page.');
            }
        } else {
            return redirect('login');
        }
    }

    public function viewAdminCaseStudyTeam($id)
    {
        if(Auth::check()){
            if(Auth::user()->isAdmin == 1){
                $team = DB::table('casestudy2019participants')->where('id',$id)->first();
                return view('dashboard.user-admin.viewCaseStudyTeam')->with('team',$team);
            }
            else {
                return redirect()->to('/dashboard')->with('message', 'Sorry, you cannot access the admin page.');
            }
        } else {
            return redirect('login');
        }
    }

    public function updateAdminCaseStudyTeam(Request $request)
    {
        if(Auth::check()){
            if(Auth::user()->isAdmin == 1){
                if($request->isMethod('post')){
                    $casestudy = Auth::user()::find(Auth::user()->id)->casestudy2019participant;

                    //01. Give/Update Preliminary Score
                    if($request->typeofPropertyUpdated == 'preliminaryScore'){
                        $scoreBefore = ($casestudy->preliminaryScore == NULL ? 'none':$casestudy->preliminaryScore);
                        $scoreAfter = ($request->preliminaryScore == NULL ? 'none':$request->preliminaryScore);
                        $casestudy->preliminaryScore = $request->preliminaryScore;
                        $casestudy->issetEssay = 2;
                        $casestudy->save();
                        $message = 'Preliminary Score of '.$casestudy->teamName.' has been set from '.$scoreBefore.' to '.$scoreAfter;
                    }

                    //02. Grant Finalist Status
                    if($request->typeofPropertyUpdated == 'grantFinalistStatus'){
                        $casestudy->isFinalist = 1;
                        $casestudy->save();
                        $message = 'Granted finalist status of '.$casestudy->teamName;
                    }

                    //03. Revoke Finalist Status
                    if($request->typeofPropertyUpdated == 'revokeFinalistStatus'){
                        $casestudy->isFinalist = 0;
                        $casestudy->finalScore = NULL;
                        $casestudy->save();
                        $message = 'Revoked finalist status of '.$casestudy->teamName;
                    }

                    //04. Give/Update Final Score
                    if($request->typeofPropertyUpdated == 'finalScore'){
                        $scoreBefore = ($casestudy->finalScore == NULL ? 'none':$casestudy->finalScore);
                        $scoreAfter = ($request->finalScore == NULL ? 'none':$request->finalScore);
                        $casestudy->finalScore = $request->finalScore;
                        $casestudy->save();
                        $message = 'Final Score of '.$casestudy->teamName.' has been set from '.$scoreBefore.' to '.$scoreAfter;
                    }

                    //05. Payment Status, Grant Paid Status
                    if($request->typeofPropertyUpdated == 'grantPaidStatus'){
                        $casestudy->issetInvoice = 2;
                        $casestudy->save();
                        $message = 'Granted Paid status to '.$casestudy->teamName;
                    }

                    //06. Payment Status, Revoke Paid Status
                    if($request->typeofPropertyUpdated == 'revokePaidStatus'){
                        $casestudy->issetInvoice = 1;
                        $casestudy->issetEssay = 1;
                        $casestudy->preliminaryScore = NULL;
                        $casestudy->finalScore = NULL;
                        $casestudy->save();
                        $message = 'Revoked Paid status to '.$casestudy->teamName;
                    }
                    
                    return back()->with('message', $message);
                }
            }
            else {
                return redirect()->to('/dashboard')->with('message', 'Sorry, you cannot access the admin page.');
            }
        } else {
            return redirect('login');
        }
    }

    public function viewAdminInvest()
    {
        if(Auth::check()){
            if(Auth::user()->isAdmin == 1){
                $users = invest2019participant::orderBy('id', 'desc')->paginate(8);
                return view('dashboard.user-admin.viewInvest')->with('users',$users);
            }
            else {
                return redirect()->to('/dashboard')->with('message', 'Sorry, you cannot access the admin page.');
            }
        } else {
            return redirect('login');
        }
    }

    
    public function viewAdminInvestTeam($id)
    {
        if(Auth::check()){
            if(Auth::user()->isAdmin == 1){
                $team = DB::table('invest2019participants')->where('id',$id)->first();
                return view('dashboard.user-admin.viewInvestTeam')->with('team',$team);
            }
            else {
                return redirect()->to('/dashboard')->with('message', 'Sorry, you cannot access the admin page.');
            }
        } else {
            return redirect('login');
        }
    }

    public function updateAdminInvestTeam(Request $request)
    {
        if(Auth::check()){
            if(Auth::user()->isAdmin == 1){
                if($request->isMethod('post')){
                    $invest = Auth::user()::find(Auth::user()->id)->invest2019participant;

                    //01. Give/Update Preliminary Score
                    if($request->typeofPropertyUpdated == 'preliminaryScore'){
                        $scoreBefore = ($invest->preliminaryScore == NULL ? 'none':$invest->preliminaryScore);
                        $scoreAfter = ($request->preliminaryScore == NULL ? 'none':$request->preliminaryScore);
                        $invest->preliminaryScore = $request->preliminaryScore;
                        $invest->issetEssay = 2;
                        $invest->save();
                        $message = 'Preliminary Score of '.$invest->teamName.' has been set from '.$scoreBefore.' to '.$scoreAfter;
                    }

                    //02. Grant Finalist Status
                    if($request->typeofPropertyUpdated == 'grantFinalistStatus'){
                        $invest->isFinalist = 1;
                        $invest->save();
                        $message = 'Granted finalist status of '.$invest->teamName;
                    }

                    //03. Revoke Finalist Status
                    if($request->typeofPropertyUpdated == 'revokeFinalistStatus'){
                        $invest->isFinalist = 0;
                        $invest->finalScore = NULL;
                        $invest->save();
                        $message = 'Revoked finalist status of '.$invest->teamName;
                    }

                    //04. Give/Update Final Score
                    if($request->typeofPropertyUpdated == 'finalScore'){
                        $scoreBefore = ($invest->finalScore == NULL ? 'none':$invest->finalScore);
                        $scoreAfter = ($request->finalScore == NULL ? 'none':$request->finalScore);
                        $invest->finalScore = $request->finalScore;
                        $invest->save();
                        $message = 'Final Score of '.$invest->teamName.' has been set from '.$scoreBefore.' to '.$scoreAfter;
                    }

                    //05. Payment Status, Grant Paid Status
                    if($request->typeofPropertyUpdated == 'grantPaidStatus'){
                        $invest->issetInvoice = 2;
                        $invest->save();
                        $message = 'Granted Paid status to '.$invest->teamName;
                    }

                    //06. Payment Status, Revoke Paid Status
                    if($request->typeofPropertyUpdated == 'revokePaidStatus'){
                        $invest->issetInvoice = 1;
                        $invest->issetEssay = 1;
                        $invest->preliminaryScore = NULL;
                        $invest->finalScore = NULL;
                        $invest->save();
                        $message = 'Revoked Paid status to '.$invest->teamName;
                    }
                    
                    return back()->with('message', $message);
                }
            }
            else {
                return redirect()->to('/dashboard')->with('message', 'Sorry, you cannot access the admin page.');
            }
        } else {
            return redirect('login');
        }
    }

    public function viewAdminShortMovie()
    {
        if(Auth::check()){
            if(Auth::user()->isAdmin == 1){
                $users = shortmovie2019participant::orderBy('id', 'desc')->paginate(8);
                return view('dashboard.user-admin.viewShortMovie')->with('users',$users);
            }
            else {
                return redirect()->to('/dashboard')->with('message', 'Sorry, you cannot access the admin page.');
            }
        } else {
            return redirect('login');
        }
    }

    public function viewAdminShortMovieTeam($id)
    {
        if(Auth::check()){
            if(Auth::user()->isAdmin == 1){
                $team = DB::table('shortmovie2019participants')->where('id',$id)->first();
                return view('dashboard.user-admin.viewShortMovieTeam')->with('team',$team);
            }
            else {
                return redirect()->to('/dashboard')->with('message', 'Sorry, you cannot access the admin page.');
            }
        } else {
            return redirect('login');
        }
    }

    public function updateAdminShortMovieTeam(Request $request)
    {
        if(Auth::check()){
            if(Auth::user()->isAdmin == 1){
                if($request->isMethod('post')){
                    $shortmovie = Auth::user()::find(Auth::user()->id)->shortmovie2019participant;

                    //01. Give/Update Preliminary Score
                    if($request->typeofPropertyUpdated == 'preliminaryScore'){
                        $scoreBefore = ($shortmovie->preliminaryScore == NULL ? 'none':$shortmovie->preliminaryScore);
                        $scoreAfter = ($request->preliminaryScore == NULL ? 'none':$request->preliminaryScore);
                        $shortmovie->preliminaryScore = $request->preliminaryScore;
                        $shortmovie->issetEssay = 2;
                        $shortmovie->save();
                        $message = 'Preliminary Score of '.$shortmovie->teamName.' has been set from '.$scoreBefore.' to '.$scoreAfter;
                    }

                    //02. Give/Update Vote Score
                    if($request->typeofPropertyUpdated == 'voteScore'){
                        $scoreBefore = ($shortmovie->voteScore == NULL ? 'none':$shortmovie->voteScore);
                        $scoreAfter = ($request->voteScore == NULL ? 'none':$request->voteScore);
                        $shortmovie->voteScore = $request->voteScore;
                        $shortmovie->save();
                        $message = 'Vote Score of '.$shortmovie->teamName.' has been set from '.$scoreBefore.' to '.$scoreAfter;
                    }

                    //03. Give/Update Vote Score
                    if($request->typeofPropertyUpdated == 'teamScore'){
                        $scoreBefore = ($shortmovie->teamScore == NULL ? 'none':$shortmovie->teamScore);
                        $scoreAfter = ($request->teamScore == NULL ? 'none':$request->teamScore);
                        $shortmovie->teamScore = $request->teamScore;
                        $shortmovie->save();
                        $message = 'Team Score of '.$shortmovie->teamName.' has been set from '.$scoreBefore.' to '.$scoreAfter;
                    }

                    //04. Payment Status, Grant Paid Status
                    if($request->typeofPropertyUpdated == 'grantPaidStatus'){
                        $shortmovie->issetInvoice = 2;
                        $shortmovie->save();
                        $message = 'Granted Paid status to '.$shortmovie->teamName;
                    }

                    //05. Payment Status, Revoke Paid Status
                    if($request->typeofPropertyUpdated == 'revokePaidStatus'){
                        $shortmovie->issetInvoice = 1;
                        $shortmovie->voteScore = NULL;
                        $shortmovie->teamScore = NULL;
                        $shortmovie->save();
                        $message = 'Revoked Paid status to '.$shortmovie->teamName;
                    }

                    //06. URL Status, Approve URL Status
                    if($request->typeofPropertyUpdated == 'grantApproval'){
                        $shortmovie->issetURL = 2;
                        $shortmovie->save();
                        $message = 'Short Movie URL of '.$shortmovie->teamName.' has been Approved';
                    }

                    //07. URL Status, Revoke URL Status
                    if($request->typeofPropertyUpdated == 'revokeApproval'){
                        $shortmovie->issetURL = 1;
                        $shortmovie->voteScore = NULL;
                        $shortmovie->teamScore = NULL;
                        $shortmovie->save();
                        $message = 'Short Movie URL of '.$shortmovie->teamName.' has been Revoked';
                    }
                    
                    return back()->with('message', $message);
                }
            }
            else {
                return redirect()->to('/dashboard')->with('message', 'Sorry, you cannot access the admin page.');
            }
        } else {
            return redirect('login');
        }
    }
}



