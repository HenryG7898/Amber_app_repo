@extends('Layout.app')
@section('content')
    <div class="my-36 flex-wrap justify-center border items-center h-10/12    border-black">
        <div class="my-9">
            <h1 class="text-center text-3xl font-bold p-2">Add Subject and Cost</h1>
            <form method="post" action="{{url('addsubject')}}" class="mb-4 h-full p-5 flex flex-col   justify-center items-center x ">
                @csrf
                <input type="text" name="subject_nm" placeholder="Subject/Skill Area" class="bg-gray-300 p-2 mx-1.5 w-1/4 rounded-md border-2 border-gray-400"><br>
                <input type="text" name="cost_amt" placeholder="Cost" class="bg-gray-300 p-2 w-1/4 mx-1.5 rounded-md border-2 border-gray-400"><br>
                <button type="submit" class="bg-blue-700 rounded-md hover:bg-green-800 duration-100 text-white p-3 w-1/6 mx-1.5 shadow-md">Submit</button>
            </form>
        </div>
    </div>
@endsection
