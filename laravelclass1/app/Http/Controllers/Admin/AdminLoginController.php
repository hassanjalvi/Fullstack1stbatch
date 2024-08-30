<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {                                               
        return view('Admin.AdminLogin');
    }
    public function adminLogin(Request $request)
    {
        
        // Retrieve the admin by email
    $admin = User::where('email', $request->input('email'))->first();

    // Check if admin exists, the password is correct, and the user type is admin
    if ($admin && Hash::check($request->input('password'), $admin->password) && $admin->type === 'admin') {
        session()->put('id', $admin->id);
        session()->put('name', $admin->name);
        return redirect()->to('/gymmer/admin')->with('success', 'Login Success');
    } else {
        return redirect('/Adminlogin')->with('error', 'Invalid Credentials or Not an Admin.');
    }
   

}
public function adminlogout()
{
    // Clear all session data
    session()->flush();

    // Redirect to the login page with a success message
    return redirect('/Adminlogin')->with('success', 'Logout Success');
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
