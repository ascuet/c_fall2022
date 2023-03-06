<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;
class TeacherController extends Controller
{
    public function create(){
        $divisions = Division::all();// SELECT * from divisions
        return view('create_teacher', compact('divisions'));
    }
}
