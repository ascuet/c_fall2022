<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function allUsers(){
        $users = User::all();
        return view('admin.pages.users',compact('users'));
    }
}
