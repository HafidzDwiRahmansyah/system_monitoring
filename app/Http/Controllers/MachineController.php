<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function index()
    {
        return view('user.mesin.index');
    }
    public function machine_report()
    {
        return view('user.owner.report_machine');
    }
}
