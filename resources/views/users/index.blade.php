@extends('layouts.app')

@section('content')
    <h1 class="text-5xl text-center text-white mt-2">Users</h1>
    <div class="bg-white shadow-md rounded-[12px] my-6 m-auto" style="width:100em;">
    <button class="rounded bg-blue-500 text-white px-7 mx-5 my-5 float-left font-bold"><a href="users/create">Add new user</a></button>
    <form>
        <input type="search"
        class="form-control px-7 mx-5 my-5 border-2 border-black" 
        placeholder="Find user here" 
        name="search" 
        value="{{ request('search') }}">
        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
    <table class="text-left w-full border-collapse">
    <thead>
      <tr>
        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-lg text-black border-b border-grey-light">Name</th>
        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-lg text-black border-b border-grey-light">Email</th>
        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-lg text-black border-b border-grey-light">Date of birth</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($users as $user)
        <tr class="odd:bg-white even:bg-slate-50">
            <td class="py-4 px-6 border-b border-grey-light font-bold">{{ $user->name }}</td>
            <td class="py-4 px-6 border-b border-grey-light font-bold">{{ $user->email }}</td>
            <td class="py-4 px-6 border-b border-grey-light font-bold">{{ $user->date_of_birth }}</td>
            <td class="py-4 px-1 border-b border-grey-light font-bold">
                <button class="rounded bg-yellow-500 text-white mx-10 px-7"><a href="users/{{ $user->id }}/edit">Edit</a></button>
            </td>
            <td class="py-4 px-1 border-b border-grey-light font-bold">
                <form action="/users/{{ $user->id }}" method="post">
                    @csrf 
                    @method('delete')
                    <button type="submit" class="rounded bg-red-500 text-white  px-7">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td class="py-4 px-6 border-b border-grey-light font-bold">User not found</td>
        </tr>
    @endforelse
    </tbody>
    </table>
    </div>
@endsection

