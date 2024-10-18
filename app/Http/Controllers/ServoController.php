<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ServoController extends Controller
{
    public function moveServo()
    {
        // Mengatur port COM3
        exec('mode COM3: BAUD=9600 PARITY=N data=8 stop=1 xon=off');

        // Mengirim perintah untuk menggerakkan servo
        exec('echo MOVE_SERVO > COM3');

        return redirect()->back()->with('success', 'Servo moved successfully!');
    }

    public function resetServo()
    {
        // Mengatur port COM3
        exec('mode COM3: BAUD=9600 PARITY=N data=8 stop=1 xon=off');

        // Mengirim perintah untuk mereset servo
        exec('echo RESET_SERVO > COM3');

        return redirect()->back()->with('success', 'Servo reset successfully!');
    }

    public function triggerServo(Request $request)
    {
        $response = Http::post('http://192.168.0.5:5000/START_SERVO');

        dd($response);

        if ($response->successful()) {
            return redirect()->back()->with('success', 'Servo started');
        } else {
            return redirect()->back()->with('error', 'Failed to start servo');
        }
    }
}
