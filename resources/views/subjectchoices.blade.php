@extends('Layout.app')

@section('content')
    <div class="bg-white  m-auto my-28 p-3 rounded shadow-2xl w-6/12">
        <div >
            <h1 class="text-center text-3xl font-bold mb-5 p-2">Select Subject for Student</h1>
            <form method="post" action="#" class=" flex flex-col m-auto  justify-center items-center ">
                @csrf

                <Select name="student_id" class="bg-gray-300 p-2 mb-5 mx-1.5 w-2/4 rounded-md border-2 border-gray-400">
                    <option value="">Chose a Student </option>
                    @foreach($students as $student)
                        <option value="{{ $student->id}}">{{ $student->First_nm . ' '. $student->Last_nm }}</option>
                    @endforeach
                </Select>
                  <Select name="subject_id" class="bg-gray-300 p-2 mb-5 mx-1.5 w-2/4 rounded-md border-2 border-gray-400">
                      <option value="">Chose a Subject </option>
                      @foreach($subjects as $subject)
                         <option value="{{ $subject->id }}">{{ $subject->subject_nm }}</option>
                      @endforeach
                  </Select>
{{--                <input type="text" name="status" placeholder="" class="bg-gray-300 p-2 mx-1.5 w-1/4 rounded-md border-2 border-gray-400"><br>--}}
                <input type="text" name="year_of_exam" placeholder="Year of Exam" class="bg-gray-300 p-2 w-2/4 mx-1.5 rounded-md border-2 border-gray-400"><br>

                <button type="submit" class="bg-blue-700 rounded-md hover:bg-green-800 duration-100 text-white p-3 w-1/6 mx-1.5 shadow-md">Submit</button>
            </form>
        </div>
    </div>
@endsection
