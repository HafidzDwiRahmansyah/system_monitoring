<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\message;

class MonitoringController extends Controller
{
    public function show()
    {
        $data_show = User::all();
        return view('user.monitoring.show', compact('data_show'));
    }

    public function broke()
    {
        $count = message::where('status','belum')->count();
        $pesan = message::all();
        return view('user.monitoring.laporan');
    }
}
