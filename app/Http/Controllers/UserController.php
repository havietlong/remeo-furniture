<?php

namespace App\Http\Controllers;

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

    public function validateLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Retrieve the user record based on the provided email
        $user = User::where('email', $credentials['email'])->first();

        $role = $user->id_role;
        if (!$user) {
            // Invalid email or user not found
            return response()->json(['message' => 'Invalid email'], 401);
        } else {
            // Compare the provided password with the hashed password stored in the user record
            if ($credentials['password'] !== $user->password) {
                // Invalid password
                return response()->json(['message' => 'Invalid password'], 401);
            } else {

                if ($role == 1 || $role === '1') {
                    // $this->createAdminSession($user);
                    // Login successful
                    session(['admin' => $user]);
                    return redirect('/admin');
                } else {
                    // $this->createUserSession($user);
                    // Login successful
                    session(['user' => $user]);

                    return redirect('/');
                }
            }
        }
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
    public function destroy( Request $request)
    {
        // To destroy the 'user' session variable
        $request->session()->forget('user');
        return redirect()->back();
    }
}
