<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\DB;


class RegistController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect('dashboard');
        } else {
            return view('register');
        }
    }

    public function forget(Request $request){
        if($request->isMethod('post')){
            $email = $request->email;
            $genpass = $this->genPass();
            $password = Hash::make($genpass);

            $user = User::where('email',$email)->first();
            $user->password = $password;
            $user->save();
            $request->session()->put(['email_user'=> $email]);

            /* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
            $mail = new PHPMailer;
            $mail->isSMTP();                            // Set mailer to use SMTP
            $mail->Host = '	mail.ieee-itb-sb.com';      // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                     // Enable SMTP authentication
            $mail->Username = 'admin@ieee-itb-sb.com';  // SMTP username
            $mail->Password = 'sandrosbITB';            // SMTP password
            $mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;  
            $mail->setFrom('admin@ieee-itb-sb.com', 'IEEE ITB Student Branch');
            $mail->addReplyTo('admin@ieee-itb-sb.com', 'IEEE ITB Student Branch');
            $mail->addAddress($email);         // Add a recipient
            $mail->addCC('admin@ieee-itb-sb.com');
            $mail->addBCC('admin@ieee-itb-sb.com');
            $mail->isHTML(true);                        // Set email format to HTML
            
            
            $bodyContent = "
            <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
            <html lang='en'>
            <head>
                <meta http-equiv='Content-Type' content='text/html charset=UTF-8' />
                <style>
                    .container{
                        width:60%;
                        font-family:'calibri light', sans-serif;
                    }

                    h1 {
                    font-size:32px;
                    color: #090909 !important;
                    }

                    p {
                    color: #242424 !important;

                    .container__content{
                        padding: 20px 10px;
                    }

                </style>
            </head>
            <body
                <div class='container'>
                    <a href='https://ieee-itb-sb.com'>
                        <img style='width:600px' src='https://ieee-itb-sb.com/assets/images/KOP-SURAT.jpg' alt='Mail-Header'>
                    </a>
                    
                    <div class='container__content'>
                    <p>Your Password has been reset</p>
                    

                    <p>
                        Password: ". $genpass ." <br>
                    </p>
                    </div>

                    <div class='container__footer'>
                        <p>
                            <a href='https://ieee-itb-sb.com'>visit our website</a> | 
                            <a href='https://ieee-itb-sb.com/login'>go to login page</a>
                        </p>
                        <p>
                            &copy; IEEE ITB Student Branch, All rights reserved.
                        </p>
                    </div>
                </div>
            </body>
            </html>
                
            "; //Jangan lupa ganti a href
            
            $mail->Subject = 'IEEE ITB SB Account Password Reset';
            $mail->Body    = $bodyContent;
            if($mail->send()){
                return redirect('/success');  
            } else {
                return view('error');
                // return $genpass;
            }
        } else {
            return view('forget');
        }
    }

    public function update(Request $request){
        if($request->isMethod('post')){
            $user = User::find(Auth::user()->id);
            if(Auth::user()->nama_anggota1==NULL){
                $user->nama_anggota1 = $request->nama_anggota;
                $user->nim_anggota1 = $request->nim_anggota;
                $user->save();
            }
            else if(Auth::user()->nama_anggota2==NULL){
                $user->nama_anggota2 = $request->nama_anggota;
                $user->nim_anggota2 = $request->nim_anggota;
                $user->save();
            }
            else {
                return redirect()->back()->with('message','Sorry, you cannot add more team member because the maximum team members allowed is 3 (three).');
            }
            return redirect()->back()->with('message', 'Added '.$request->nama_anggota.' as a new team member');
        }
        else{
            return view('dashboard.addteam')->with('message', NULL);
        }
    }

    public function process(Request $request){
        if($request->isMethod('post')){
            $input = $request->all();
            $genpass = $this->genPass();
            $input['password'] = Hash::make($genpass);

            $this->validator($input);

            $user = User::create($input);
            $request->session()->put(['email_user'=> $input['email']]);
                /* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
                $mail = new PHPMailer;
                $mail->isSMTP();                            // Set mailer to use SMTP
                $mail->Host = '	mail.ieee-itb-sb.com';      // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                     // Enable SMTP authentication
                $mail->Username = 'admin@ieee-itb-sb.com';  // SMTP username
                $mail->Password = 'sandrosbITB';            // SMTP password
                $mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;  
                $mail->setFrom('admin@ieee-itb-sb.com', 'IEEE ITB Student Branch');
                $mail->addReplyTo('admin@ieee-itb-sb.com', 'IEEE ITB Student Branch');
                $mail->addAddress($input['email']);         // Add a recipient
                $mail->addCC('admin@ieee-itb-sb.com');
                $mail->addBCC('admin@ieee-itb-sb.com');
                $mail->isHTML(true);                        // Set email format to HTML
            
            $nama = $input['name'];
            $email = $input['email'];
            $afiliasi = $input['afiliasi'];
            
            $bodyContent = "
            <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
            <html lang='en'>
            <head>
                <meta http-equiv='Content-Type' content='text/html charset=UTF-8' />
                <style>
                    .container{
                        width:60%;
                        font-family:'calibri light', sans-serif;
                    }

                    h1 {
                    font-size:32px;
                    color: #090909 !important;
                    }

                    p {
                    color: #242424 !important;

                    .container__content{
                        padding: 20px 10px;
                    }

                </style>
            </head>
            <body
                <div class='container'>
                    <a href='https://ieee-itb-sb.com'>
                        <img style='width:600px' src='https://ieee-itb-sb.com/assets/images/KOP-SURAT.jpg' alt='Mail-Header'>
                    </a>
                    
                    <div class='container__content'>
                    <p>Dear ".$nama.",</p>
                    <p>Welcome to IEEE ITB Student Branch.</p>
                    
                    <p>
                        These are the informations related to your IEEE ITB SB Account.<br> 
                        Consider to save or print this email for documentation purpose.
                    </p>

                    <p>
                        Team Leader Name: ".$nama."<br>"
                        ."Afilliation: ".$afiliasi."<br>
                        Email: ".$email." <br>
                        Password: ".$genpass."<br>
                    </p>
                    </div>

                    <div class='container__footer'>
                        <p>
                            <a href='https://ieee-itb-sb.com'>visit our website</a> | 
                            <a href='https://ieee-itb-sb.com/login'>go to login page</a>
                        </p>
                        <p>
                            &copy; IEEE ITB Student Branch, All rights reserved.
                        </p>
                    </div>
                </div>
            </body>
            </html>
                
            ";
            
            $mail->Subject = 'IEEE ITB SB Account';
            $mail->Body    = $bodyContent;

            if($mail->send()){
                return redirect('/success');  
            } else {
                return view('error');
            }
        }
    }

    public function success(Request $request){
        if($request->session()->has('email_user')){
            $value = $request->session()->get('email_user');
            return view('after-regist')->with('email', $value);
        } else {
            return redirect('/');
        }
    }

    private function genPass(){
        return mt_rand(20000000, 30000000);
    }
    protected function validator($data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'afiliasi' => ['required', 'string', 'max:255'],
            'id_lomba' => ['required', 'string', 'max:255']
        ]);
    }
}
