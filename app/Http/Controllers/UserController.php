<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('user.add', compact('data'));
    }

    public function add_coffe(){
        return view('user.monitoring.add');
    }

    public function store(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('user_add')->with('success', 'User berhasil ditambahkan !');
    }

    public function dashboard(){
        $count = message::where('status','belum')->count();
        $pesan = message::all();
        return view('dashboard', compact('count','pesan'));
    }
}
