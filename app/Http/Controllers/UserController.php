<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$users = User::all();
        if (request('search')) {
            $users = User::where('name', 'like', '%' . request('search') . '%')->get();
        } else {
            $users = User::all();
        }
        return view('users.index',[
            'users'=>$users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $users = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'date_of_birth' => $request->input('date_of_birth')
        ]);

        return redirect('/users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::find($id);
        return view('users.edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = User::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'date_of_birth' => $request->input('date_of_birth')
            ]);
        
        return redirect('/users');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //$user=User::find($id)->first();
        
        $user->delete();

        return redirect('/users');      
    }
}
