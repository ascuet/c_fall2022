<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function dashboard(){
        return view('admin.pages.dashboard');
    }
    public function forms(){
        return view('admin.pages.forms');
    }
    public function tables(){
        return view('admin.pages.tables');
    }
}
