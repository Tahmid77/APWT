<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoggedController extends Controller
{
    //
    function dashboard(){

       if(session()->has('logged')){
        $users = DB::table('users')->get();

        return view('students.home')
        ->with('users',$users);
       }
    }
    function details($id){
        $users = User::where('id','=',$id)
                            ->select('name','username','email')
                            ->get();
        return view('students.details')
        ->with('users',$users);
     }
    function logout(){

        if(session()->has('logged')){
         session()->flush();
         return redirect()->route('student.login');
        }
     }
}
