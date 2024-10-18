<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function getData()
    {
        $data = [
            'servo1' => DB::table('valuelm1s')->orderBy('name', 'desc')->limit(10)->get()->reverse()->values(),
            'servo2' => DB::table('valuelm2s')->orderBy('name', 'desc')->limit(10)->get()->reverse()->values(),
            'servo3' => DB::table('valuelm3s')->orderBy('name', 'desc')->limit(10)->get()->reverse()->values(),
            'servo4' => DB::table('valuelm4s')->orderBy('name', 'desc')->limit(10)->get()->reverse()->values(),
            'servo5' => DB::table('valuelm5s')->orderBy('name', 'desc')->limit(10)->get()->reverse()->values(),
        ];

        return response()->json($data);
    }
}
