<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{
    public function register(){
        return view('admin.pages.register');
    }
    public function createUser(Request $req){
        $name = $req->name;
        $email = $req->email;
        $password = $req->password;
        $confirm = $req->cnf_password;
        $role = $req->role;

        if($password == $confirm){
            $user_exists = User::where('email','=',$email)->first();
            if($user_exists){
                return redirect()->back()->with('info', 'Account Already Exists.');
            }
            else{
                $obj = new User();
                $obj->name=$name;
                $obj->email=$email;
                $obj->password=md5($password);
                $obj->role=$role;
                if($obj->save()){
                    return redirect()->back()->with('info', 'Account Created. Waiting for approval.');
                }
            }
        }
        else{
            return redirect()->back()->with('info', 'Password Mismatch');
        }
        
       
    }
    public function login(){
        return view('admin.pages.login');
    }
    public function userLogin(Request $req){

    }
}
