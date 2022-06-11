<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class StudentController extends Controller
{
    //
    function home(){
       
        return view('students.welcome');
    }
    function registration(){
        return view('students.registration');
    }
    function login(){
        return view('students.login');
    }
    function registrationSubmit(Request $req){

        //$req->validate([],[]);
        
        $this->validate($req,
             [
                "name"=>"required|max:20|alpha",
                "username"=>"required|max:20|unique:users,username",
                "email"=>"required|email|unique:users,email",
                "password"=>"required|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/i",
                "conf_password"=>"required|same:password"
             ],
             [
                 "name.required"=> "The field is required",
                 "username.required"=> "The field is required",
                 "email.required"=> "The field is required",
                 "password.required"=> "The field is required",
                 "conf_password.required"=> "The field is required",
                 "name.max"=> "Name should not exceed 10 characters"
             ]
            );

            $s1 = new User();
            $s1->name = $req->name;
            $s1->username = $req->username;
            $s1->email = $req->email;
            $s1->password = $req->password;
            $s1->save(); //insert query will run
            session()->flash('msg','Registration Successful');
            return redirect()->route('student.login');
    }
    function loginSubmit(Request $req){

        //$req->validate([],[]);
        
        $this->validate($req,
             [
                "email"=>'required|email',
                "password"=>"required",
             ],
             [
                 "email.required"=> "The field is required",
                 "password.required"=> "The field is required",
             ]
            );

            $user = User::where('email',$req->email)->where('password',$req->password)->first();
            if($user){
                session()->put('logged',$user->username);
                return redirect()->route('root');
            }
            else{
                session()->flash('msg','Invalid Username or Password');
                return redirect()->route('student.login');
            }
    }
    
}
