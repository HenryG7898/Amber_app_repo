@extends('Layout.app')
@section('content')
    <div class=" w-1/4 text-white rounded bg-black hover:bg-green-500 hover:text-black flex flex-col p-6 justify-center items-center bg-white shadow-md my-5 rounded m-auto">

        <div class="text-2xl text-center text-black   font-bold">
            <h1 class="text-red-900 text-5xl font-bold"> Subject List</h1>
        </div>

    </div>
    <div class="my-10"></div>
    <table class="border-collapse w-full">
        <thead>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Subject Name</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Cost</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Actions</th>
        </tr>
        </thead>
        @if (isset($users))


                @foreach($users as $user)
                    <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">{{$user->subject_nm }}</td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">${{$user->cost_amt }}</td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static"><a href="{{ url('editsubject/'.$user->id) }}" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black" >Edit</a> </td>
                    </tr>
                @endforeach
        @endif
    </table>
    <div class="text-white bg-black">
        {{ $users->links() }}
    </div>
    <div>
            <a  href="{{ url('addsubject') }}" class="cursor-pointer w-1/4 text-white rounded bg-black hover:bg-green-500 hover:text-black flex flex-col p-6 justify-center items-center bg-white shadow-md my-10 rounded m-auto">

                <div class="text-2xl text-center text-black   font-bold">
                    <h1> Add New Subject</h1>
                </div>

            </a>
    </div>
@endsection
