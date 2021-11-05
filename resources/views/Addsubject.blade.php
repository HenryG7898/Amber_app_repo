@extends('Layout.app')
@section('content')
    <div class="bg-white  m-auto my-28 p-3 rounded shadow-2xl w-6/12">
        <div class="my-5">
            <h1 class="text-center text-3xl font-bold p-4">Add Subject and Cost</h1>
            <form method="post" action="{{url('addsubject')}}" class="flex flex-col m-auto  justify-center items-center ">
                @csrf
                <input type="text" name="subject_nm" placeholder="Subject/Skill Area" class="bg-gray-300 p-2 mb-2 mx-1.5 w-2/4 rounded-md border-2 border-gray-400"><br>
                <input type="text" name="cost_amt" placeholder="Cost" class="bg-gray-300 p-2 mb-2 mx-1.5 w-2/4 rounded-md border-2 border-gray-400"><br>
                <button type="submit" class="bg-blue-700 rounded-md hover:bg-green-800 duration-100 text-white p-3 w-1/6 mx-1.5 shadow-md">Submit</button>
            </form>
        </div>
    </div>
@endsection
