@extends('Layout.app')
@section('content')
    <div class="m-auto my-16">

        <div class="bg-white m-auto   p-16 rounded shadow-2xl w-4/6">
            @if ($data)
            <h2 class="text-3xl font-bold mb-5 text-gray-800 text-center">Edit Student</h2>

            <form class="space-y-5 space-x-5 grid md:grid-cols-3" action="{{ url('updatestudent') }}" method="post">
                @csrf

                <div>
                    <label class="block mb-1 font-bold text-gray-500">First Name</label>
                    <input type="text" value="{{ $data->First_nm }}" name="First_nm" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                    <input type="hidden" value="{{ $data->id }}" name="id" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                </div>

                <div>
                    <label class="block mb-1 font-bold text-gray-500">Last Name</label>
                    <input type="text" value="{{ $data->Last_nm }}" name="Last_nm" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                </div>

                <div>
                    <label class="block mb-1 font-bold text-gray-500">Date of Birth</label>
                    <input type="date" value="{{ $data->DOB }}" name="DOB" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                </div>

                <div>
                    <label class="block mb-1 font-bold text-gray-500">Class</label>
                    <input type="text" value="{{ $data->Class }}" name="Class" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                </div>

                <div>
                    <label class="block mb-1 font-bold text-gray-500">Email</label>
                    <input type="email" value="{{ $data->Email }}" name="Email" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                </div>

                <div>
                    <label class="block mb-1 font-bold text-gray-500">Phone Number</label>
                    <input type="text" value="{{ $data->Phone_nb }}" name="Phone_nb" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                </div>

                <div>
                    <label class="block mb-1 font-bold text-gray-500">Gender</label>
                    <select name="Gender"  class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" id="Gender">
                        @if ($data->Gender === "Male")
                            <option selected value="Male">Male</option>
                            <option value="Female">Female</option>


                        @else
                            <option selected value="Female">Female</option>
                            <option value="Male">Male</option>

                        @endif
                    </select>
                </div>

                <button type="submit" class="block w-full bg-yellow-400 hover:bg-yellow-300 p-4 rounded text-yellow-900 hover:text-yellow-800 transition duration-300">Save</button>

            </form>
            @else
                <h2 class="text-5xl font-bold mb-10 text-gray-800 text-center">Sorry! No Student Available</h2>
            @endif
        </div>

    </div>
@endsection
