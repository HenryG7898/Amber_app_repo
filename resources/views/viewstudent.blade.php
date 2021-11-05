@extends('Layout.app')
@section('content')
    <div>
        <div class="w-4/6 mx-auto my-10">
            @if ($data)
            <div class=" flex flex-col p-6 justify-center items-center mb-10 bg-white shadow-md rounded my-6">
                <div class="border-b text-4xl text-center text-black  mb-5 font-bold">
                <h1 >Student Information</h1>
            </div>
                <div class="grid md:grid-cols-3 text-sm  font-bold">
                    <div class="grid grid-cols-2">
                        <div class="px-4 py-2 ">First Name:</div>
                        <div class="px-4 py-2">{{$data[0]->students->First_nm}}</div>
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="px-4 py-2 ">Last Name:</div>
                        <div class="px-4 py-2">{{$data[0]->students->Last_nm}}</div>
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="px-4 py-2 ">Gender:</div>
                        <div class="px-4 py-2">{{$data[0]->students->Gender}}</div>
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="px-4 py-2 ">Phone Number:</div>
                        <div class="px-4 py-2">{{$data[0]->students->Phone_nb}}</div>
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="px-4 py-2 ">Class:</div>
                        <div class="px-4 py-2">{{$data[0]->students->Class}}</div>
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="px-4 py-2 ">Date of Birth:</div>
                        <div class="px-4 py-2">{{$data[0]->students->DOB}}</div>
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="px-4 py-2 ">Email:</div>
                        <div class="px-4 py-2">{{$data[0]->students->Email}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-2/3 mx-auto">
            <div class="bg-white shadow-md rounded my-6">
                <table class="text-left w-full border-collapse">
                    <thead>
                    <tr>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Subject</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Cost for Subject</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Year of Exam</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Status</th>
                        @if ($data[0]->status === 0)
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Action</th>
{{--                            @elseif($data[0]->status == )--}}
{{--                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Action</th>--}}
{{--                        @else--}}
{{--                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Action</th>--}}

                        @endif
                    </tr>
                    </thead>


                    @foreach($data as $value)
                    <tr class="hover:bg-red-700">

                        <td class="py-4 px-6 border-b border-grey-light">{{ $value->subjects->subject_nm }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $value->subjects->cost_amt }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $value->year_of_exam }}</td>
                        @if ($value->status === 0)
                        <td class="py-4 px-6 border-b border-grey-light">{{ ('Pending') }}</td>
                            @elseif($value->status === 1)
                            <td class="py-4 px-6 border-b border-grey-light">{{ ('Approve') }}</td>
                            @elseif($value->status === 2)
                            <td class="py-4 px-6 border-b border-grey-light">{{ ('Reject') }}</td>
                            @endif
                        @if ($value->status === 0)
                        <td class="py-4 px-6 border-b border-grey-light flex flex-wrap space-x-8">
                            <form action="{{ url('subjectapprove',$value->id) }}" method="post">
                                @csrf
                                <button type="submit" name="status_approve" value="1" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black">Approve</button>
                            </form>
                            <form action="{{ url('subjectdeny',$value->id) }}" method="post">
                                @csrf
                                <button type="submit" name="status_deny" value="2" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-red-500 hover:text-black">Reject</button>
                            </form>
                        </td>
                        @else

                        @endif
                    </tr>
                    @endforeach
                    <div class="text-white bg-black">
                        {{ $data->links() }}
                    </div>
                    @else
                        <h2 class="text-5xl font-bold mb-10 text-gray-800 text-center">Sorry! No Student Available</h2>


                </table>
            </div>
            @endif

        </div>

    </div>

@endsection

{{--<form action="{{ route('subjectapprove') }}" method="post">--}}
{{--    @csrf--}}
{{--    <button type="submit" name="status_approve" value="2" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black">Approve</button>--}}
{{--</form>--}}
{{--<a href="{{ route('subjectapprove','1') }}">--}}
{{--    <button  name="status_approve" value="1" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black">Approve</button>--}}
{{--</a>--}}
