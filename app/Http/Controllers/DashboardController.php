<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            if(Auth::user()->is_admin==0){
                return view('dashboard.normal');
            } else {
                return view('dashboard.admin');
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

    public function showChangePasswordForm(){
        if(Auth::check()){
            return view('dashboard.change-pass');
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
}
