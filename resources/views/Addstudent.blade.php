@extends('Layout.app')
@section('content')
    <div class="  m-auto my-16 ">

        <div class="bg-white m-auto   p-16 rounded shadow-2xl w-4/6">

            <h2 class="text-3xl font-bold mb-10 text-gray-800 text-center">Add a Student</h2>

            <form class="space-y-5 space-x-5 grid md:grid-cols-3" action="{{ url('addstudent') }}" method="post">
                @csrf
                <div>
                    <label class="block mb-1 font-bold text-gray-500">First Name</label>
                    <input type="text" name="First_nm" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                </div>

                <div>
                    <label class="block mb-1 font-bold text-gray-500">Last Name</label>
                    <input type="text" name="Last_nm" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                </div >

                <div >
                    <label class="block mb-1 font-bold text-gray-500">Date of Birth</label>
                    <input type="date" name="DOB" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                </div>

                <div>
                    <label class="block mb-1 font-bold text-gray-500">Class</label>
                    <input type="text" name="Class" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                </div>

                <div>
                    <label class="block mb-1 font-bold text-gray-500">Email</label>
                    <input type="email" name="Email" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                </div>

                <div>
                    <label class="block mb-1 font-bold text-gray-500">Phone Number</label>
                    <input type="text" name="Phone_nb" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                </div>

                <div>
                    <label class="block mb-1 font-bold text-gray-500">Gender</label>
                    <select name="Gender" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" id="Gender">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <br>

                <button type="submit" class=" -p-5 w-4/6 font-bold  bg-yellow-400 hover:bg-blue-300 rounded text-yellow-900 hover:text-white text-2xl transition ">Add</button>

            </form>

        </div>

    </div>
@endsection
