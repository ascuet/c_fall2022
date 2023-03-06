<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\Teacher;
class TeacherController extends Controller
{
    public function create(){
        $divisions = Division::all();// SELECT * from divisions
        return view('create_teacher', compact('divisions'));
    }

    public function insert(Request $req){
        $obj = new Teacher();
        $obj->division_id = $req->teacher_division;
        $obj->district_id = $req->teacher_district;
        $obj->name = $req->teacher_name;
        if($obj->save()){
            return response()->json([
                'msg' => 'Created successfully',
                'obj' => $obj
            ]);
        }
    }
}
