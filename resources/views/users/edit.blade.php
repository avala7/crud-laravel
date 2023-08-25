@extends('layouts.app')

@section('content')
    <h1 class="text-5xl text-center text-white mt-2">Update user</h1>
    <div class="flex justify-center pt-20 m-auto" >
        <form action="/users/{{ $user->id }}" method="post">
            @csrf
            @method('put')
            <div class="block">
                <input type="text"
                class="block mb-10 p-2 w-80 placeholder-gray-500"
                name="name"
                value="{{ $user->name }}">
            </div>
            <div class="block">
                <input type="text"
                class="block mb-10 p-2 w-80 placeholder-gray-500"
                name="email"
                value="{{ $user->email }}">
            </div>
            <div class="block">
                <input type="text"
                class="block mb-10 p-2 w-80 placeholder-gray-500"
                name="date_of_birth"
                value="{{ $user->date_of_birth }}">
            </div>
            <div class="block">
                <button type="submit"
                class="block mb-10 p-2 w-80 bg-green-500 rounded text-white font-bold">
                    Update
                </button>
            </div>
        </form>
    </div>
@endsection