<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Subject_choice;
use Illuminate\Http\Request;

class SubjectChoiceController extends Controller
{
    public function show(){
        $students = Student::all();
        $subjects = Subject::all();
        return view('subjectchoices', [
            'students' => $students,
            'subjects' => $subjects
        ]);
    }
    public function choice(Request $request){

//
//
//
//            ->exists();

        $choice = Subject_choice::where([
        'student_id' => $request->student_id,
        'subject_id' => $request->subject_id,
        'year_of_exam' => $request->year_of_exam,
        ])->exists();

        if (!$choice) {
            Subject_choice::create([
                'student_id' => $request->student_id,
                'subject_id' => $request->subject_id,
                'year_of_exam' => $request->year_of_exam,
            ]);
            return redirect('/');
        }
        return redirect('/');
    }

    public function subjectlist($id){
        $data = Subject_choice::with(['students','subjects'])
            ->where('student_id',$id)
            ->paginate(3);



    return view('viewstudent',['data'=>$data ]);
    }

    public function approve(Request $request, $id){
//        dd($request->status_approve);
//        $approve = new Subject_choice();
//        $subjChoice = Subject_choice::where('id',$request->id)->get();
//        $subjChoice = Subject_choice::find($id);
        $subjChoice = Subject_choice::where('id', $id)->update(['status'=>1]);
//        dd($subjChoice);
        //        $subjChoice->status = $request->status_approve;


        return back();
    }
    public function deny(Request $request, $id){
        $subjChoice = Subject_choice::where('id', $id)->update(['status'=>2]);

        return back();
    }
}
