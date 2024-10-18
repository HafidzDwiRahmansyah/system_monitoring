<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speed;

class SpeedController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'speed' => 'required|numeric',
        ]);

        $speed = new Speed();
        $speed->speed = $validatedData['speed'];
        $speed->save();

        return response()->json(['status' => 'success', 'data' => $speed], 200);
    }
}
