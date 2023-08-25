@extends('layouts.app')

@section('content')
    <h1 class="text-5xl text-center text-white mt-2">Add new user</h1>
    <div class="flex justify-center pt-20 m-auto" >
        <form action="/users" method="post">
            @csrf
            <div class="block">
                <input type="text"
                class="block mb-10 p-2 w-80 placeholder-gray-500"
                name="name"
                placeholder="Name">
            </div>
            <div class="block">
                <input type="text"
                class="block mb-10 p-2 w-80 placeholder-gray-500"
                name="email"
                placeholder="Email">
            </div>
            <div class="block">
                <input type="text"
                class="block mb-10 p-2 w-80 placeholder-gray-500"
                name="date_of_birth"
                placeholder="Date of birth">
            </div>
            <div class="block">
                <button type="submit"
                class="block mb-10 p-2 w-80 bg-green-500 rounded text-white font-bold">
                    Add
                </button>
            </div>
        </form>
    </div>
@endsection