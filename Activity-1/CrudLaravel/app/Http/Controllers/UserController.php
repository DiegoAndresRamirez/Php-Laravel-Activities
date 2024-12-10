<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'lastnames' => 'required|string|max:255',
            'email'=> 'required|email',
            'gender' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'country_id' => 'required|integer',
        ]);

        $data['password'] = bcrypt('secret');

        $user = User::create($data);

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $countries = Country::all();
        return view('users.edit', compact('user', 'countries'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'lastnames' => 'required|string|max:255',
            'email'=> 'required|email',
            'gender'=> 'required|string',
            'phone'=> 'required|string',
            'address'=> 'required|string',
            'country_id'=> 'required|integer',
            ]);

        $user->update($data);

        return redirect()->route('dashboard');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
