<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function view(){
        $users = Student::all();
        return view('dashboard', compact('users'));
    }

    public function store(Request $request){
        $validate = $request->validate([
            'First_nm' =>['required','string'],
            'Last_nm' =>['required','string'],
            'Class' =>['required','string'],
            'Gender' =>['required','string'],
            'DOB' =>['required'],
            'Phone_nb' =>['required','string','numeric',],
            'Email' =>['required','string','email'],
        ]);

        $cus = new Student();
        $cus->First_nm = $request->First_nm;
        $cus->Last_nm = $request->Last_nm;
        $cus->Email = $request->Email;
        $cus->Class = $request->Class;
        $cus->Gender = $request->Gender;
        $cus->DOB = $request->DOB;
        $cus->Phone_nb = $request->Phone_nb;
        $cus->save();
        return redirect('');
    }

    public function form(){
    return view('Addstudent');
    }

    public function updatestudent(Request $request){
        $validate = $request->validate([
            'First_nm' =>['required','string'],
            'Last_nm' =>['required','string'],
            'Class' =>['required','string'],
            'Gender' =>['required','string'],
            'DOB' =>['required'],
            'Phone_nb' =>['required','string','numeric',],
            'Email' =>['required','string','email'],
        ]);

        $cus = new Student();
        $data = $cus->find($request->id);
            if ($data) {


        $data->First_nm = $request->First_nm;
        $data->Last_nm = $request->Last_nm;
        $data->Email = $request->Email;
        $data->Class = $request->Class;
        $data->Gender = $request->Gender;
        $data->DOB = $request->DOB;
        $data->Phone_nb = $request->Phone_nb;
        $data->save();
            }
        return redirect('/');
    }

    public function Edit($id){
        $cus = new Student();
        $data = $cus->find($id);

        return view('editstudent',['data'=>$data]);
    }
}
