<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use DB;
class EmployeeController extends Controller
{
    public function create(){
        return view('employee.create');
    }
    public function store(Request $req){
        // Eloquent ORM
      /*   $obj = new Employee(); // employees
        $obj->name= $req->name;
        $obj->email= $req->email;
        $obj->birth_date= $req->birth_date;
        $obj->salary= $req->salary;
        $obj->department= $req->department;
        $obj->gender= $req->gender;
        $obj->address= $req->address; */
        if($req->status){
            $status = 1;
        }
        else {
            $status = 0;
        }
        // $obj->status= $status;
       /*  if($obj->save()){
            echo 'Successfully Inserted';
        } */
        // Eloquent ORM

        // Query Builder
        DB::table('employees')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'birth_date' => $req->birth_date,
            'salary' => $req->salary,
            'department' => $req->department,
            'gender' => $req->gender,
            'address' => $req->address,
            'status' => $status
        ]);
        echo 'Successfully Inserted';
        // Query Builder
    }
    public function all(){
        $employees = Employee::all();
        return view('employee.all', compact('employees'));
    }
    public function edit($id){
        // SELECT * FROM employees WHERE id=1
        $employee = Employee::find($id);
        return view('employee.edit', compact('employee'));
    }
    public function update($id, Request $req){
        $obj = Employee::find($id); // employees
        $obj->name= $req->name;
        $obj->email= $req->email;
        $obj->birth_date= $req->birth_date;
        $obj->salary= $req->salary;
        $obj->department= $req->department;
        $obj->gender= $req->gender;
        $obj->address= $req->address; 
        if($req->status){
            $status = 1;
        }
        else {
            $status = 0;
        }
        $obj->status= $status;
        if($obj->save()){
            return redirect('employees');
        }
        // Eloquent ORM
    }

    public function delete($id){
        Employee::find($id)->delete();
        return redirect('employees');
    }

}
