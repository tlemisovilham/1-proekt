<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'password' => $request->password
        ]);

        return redirect('');
    }

    public function login($id, Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'password' => 'required'
        ]);

        
    }
}
