<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\message;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // dd($credentials);

        if (Auth::attempt($credentials)) {
            if (auth()->user()->role == 'admin') {
                return redirect('dashboard')->with('success', 'Login Success !');
            } elseif (auth()->user()->role == 'monitoring') {
                return redirect('dashboard')->with('success', "Login Success !");
            } elseif (auth()->user()->role == 'mesin') {
                return redirect('menu')->with('success', "Login Success !");
            } elseif (auth()->user()->role == 'owner') {
                return redirect('dashboard')->with('success', "Login Success !");
            } else {
                return redirect('login')->with('error', 'Mohon login terlebih dahulu');
            }
        }
        return back()->with('error', 'Login Invalid !');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Logout Success !');
    }
}
