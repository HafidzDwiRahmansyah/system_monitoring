<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;

class AdminController extends Controller
{
    public function index()
    {
        $count = message::where('status', 'belum')->count();
        $pesan = message::all();
        return view('user.admin.laporan', compact('count', 'pesan'));
    }

    public function report(Request $request)
    {
        $file = $request->report->store('uploads', 'public');

        return back()->with('success', 'File berhasil di upload !');
    }

    public function status(Request $request)
    {

        $id = $request->id;
        // dd($id);
        $message = message::where('id', $id)->update(['status' => 'sudah']);

        return back()->with('success', 'Sudah terbaca');
    }
}
