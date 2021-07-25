<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('partials.registrationForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required | max:125',
            'email' => 'required | email | unique:users',
            'password' => 'required',
        ]);
        
        User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->input('password'))
        ]);
        auth()->attempt($request->only('email','password'));
        return redirect('/');
    }
}
