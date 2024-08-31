<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class SignINController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Frontend.sign-in');
    }
    public function onLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email', 
            'password' => 'required|string|min:8',
        ]);

        if (Auth::attempt($credentials)) {
          
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return view('Frontend.index');
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
