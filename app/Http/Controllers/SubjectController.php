<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function view(){
        return view('Addsubject');
    }

    public function store(Request $request)
    {

        $choice = Subject::where([
            'subject_nm' => $request->subject_nm,
        ])->exists();

        if (!$choice) {
            Subject::create([
                'subject_nm' => $request->subject_nm,
                'cost_amt' => $request->cost_amt,

            ]);
            return redirect('subject');
        }
        return redirect('subject');

//        $qual = new Subject();
//        $qual->subject_nm = $request->subject_nm;
//        $qual->cost_amt = $request->cost_amt;
//        $qual->save();
//        return redirect('subject');
    }

    public function show(){
        $users = Subject::paginate(3);
        return view('subject',compact('users'));
    }

    public function Edit($id){
        $cus = new Subject();
        $data = $cus->find($id);

        return view('editsubject',['data'=>$data]);
    }

    public function updatesubject(Request $request){
        $qual = new Subject();
        $data = $qual->find($request->id);
        if ($data) {
        $data->subject_nm = $request->subject_nm;
        $data->cost_amt = $request->cost_amt;
        $data->save();
            }
        return redirect('subject');
    }
}
