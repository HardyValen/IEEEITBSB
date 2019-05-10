<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect('/');
        } else {
            return view('login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function process(Request $request){
        if($request->isMethod('post')){
            $input = $request->all();

            $this->validator($input);

            $email = $input['email'];
            $password = $input['password'];

            Auth::attempt(['email' => $email, 'password' => $password]);
            if(Auth::check()){
                $request->session()->put(['wrong' => null]);
                return redirect('dashboard');
            } else {
                $request->session()->put(['wrong' => 'No Account matched with that email and password.']);
                return redirect('login');
            }
        }
    }
    protected function validator($data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
    }
}
