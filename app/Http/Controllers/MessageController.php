<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $message = new message();

        $message->id_mesin = $request->id_mesin;
        $message->title = $request->title;
        $message->text = $request->keterangan;
        $message->status = 'belum';

        // dd($request->only(['id_mesin', 'title', 'keterangan']));

        $message->save();

        return back()->with('success', 'Pesan dikirim');
    }
}
