@extends('Layout.app')

@section('content')
<div>
    <div class="bg-white rounded-lg w-3/5 m-auto my-10 p-5 flex  justify-center items-center">
        <div class="grid grid-cols-2 space-x-20">
            <div class="text-black font-bold text-3xl">
                <h1>Payments</h1>
            </div>
            <div class="" style="margin-left: 26px">
                <a class="mx-24 text-black font-bold text-2xl bg-blue-800 p-2 rounded-2xl hover:text-white hover:bg-black" href="">Add Payment</a>
            </div>
        </div>
    </div>
    <div>
        <div>
            <table>

            </table>
        </div>
    </div>
</div>
@endsection
