@extends('layout.app')

@section('content')
    <div class="text-center">
        <div class="my-7"></div>
        <div class=" w-1/4 text-white rounded bg-black hover:bg-green-500 hover:text-black flex flex-col p-6 justify-center items-center bg-white shadow-md my-5 rounded m-auto">

            <div class="text-2xl text-center text-black   font-bold">
                <h1 class="text-red-900 text-5xl font-bold"> Student List</h1>
            </div>

        </div>
    </div>

    <div class="mx-auto w-3/3 flex flex-wrap justify-center items-center">
        <div class=" shadow-md rounded">
    <table class=" border-collapse ">
        <thead class="bg-black rounded-full">
        <tr>
            <th class="p-3 font-bold uppercase text-white ">First Name</th>
            <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Last Name</th>
            <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Email</th>
            <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Date of Birth</th>
            <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Class</th>
            <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Phone Number</th>
            <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Gender</th>
            <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Actions</th>
        </tr>
        </thead>
        @if (isset($users))

        @foreach($users as $user)
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{$user->First_nm }}</td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{$user->Last_nm }}</td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{$user->Email}}</td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{$user->DOB}}</td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{$user->Class}}</td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">(876){{$user->Phone_nb}}</td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{$user->Gender}}</td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">
                        <a href="{{ url('editstudent/'.$user->id) }}" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black" >Edit</a>
                        <a href="{{ url('subjectlist/'.$user->id) }}" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black" >View</a>
                    </td>
                </tr>

        @endforeach
        @endif
    </table>
    </div>
    </div>
<div>

        <a href="{{ url('addstudent') }}" class="cursor-pointer w-1/4 text-white rounded bg-black hover:bg-green-500 hover:text-black flex flex-col p-6 justify-center items-center bg-white shadow-md my-10 rounded m-auto">

            <div class="text-2xl text-center text-black   font-bold">
                <h1> Add New Student Add</h1>
            </div>

        </a>

</div>
@endsection
