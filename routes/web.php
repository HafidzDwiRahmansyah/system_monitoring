<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\SpeedData;
use App\Http\Controllers\ServoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', [UserController::class, 'dashboard']);

Route::get('/monitoring', function () {
    return view('user.monitoring.index');
});

Route::post('/login', [AuthController::class, 'login']);

Route::get('/user_add', [UserController::class, 'index']);
Route::post('user_add_new', [UserController::class, 'store']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/monitoring_show', [MonitoringController::class, 'show']);

Route::get('/getData', [DataController::class, 'getData']);


Route::get('/add_coffe', [UserController::class, 'add_coffe']);

Route::get('/laporan_mesin', [AdminController::class, 'index']);
Route::post('/component_report', [AdminController::class, 'report']);

Route::get('/machine_report', [MachineController::class, 'machine_report']);

Route::get('/menu', [MachineController::class, 'index']);

Route::get('/report_broke', [MonitoringController::class, 'broke']);
Route::post('/report_ms_adm', [MessageController::class, 'store']);

Route::post('/status', [AdminController::class, 'status']);

Route::get('/move-servo', [ServoController::class, 'moveServo'])->name('move.servo');
Route::get('/reset-servo', [ServoController::class, 'resetServo'])->name('reset.servo');

Route::post('/trigger-servo', [ServoController::class, 'triggerServo']);


Route::get('/api/servo1', function () {
    $servo1Data = SpeedData::orderBy('timestamp', 'desc')->take(5)->get(['timestamp', 'speed']);
    $servo2Data = SpeedData2::orderBy('timestamp', 'desc')->take(5)->get(['timestamp', 'speed']);
    $servo3Data = SpeedData3::orderBy('timestamp', 'desc')->take(5)->get(['timestamp', 'speed']);
    $servo4Data = SpeedData4::orderBy('timestamp', 'desc')->take(5)->get(['timestamp', 'speed']);
    $servo5Data = SpeedData5::orderBy('timestamp', 'desc')->take(5)->get(['timestamp', 'speed']);

    $formattedData = $servo1Data->map(function ($item) {
        return [
            'nama' => $item->timestamp,
            'value' => $item->speed
        ];
    });
    $formattedData = $servo2Data->map(function ($item) {
        return [
            'nama' => $item->timestamp,
            'value' => $item->speed
        ];
    });
    $formattedData = $servo3Data->map(function ($item) {
        return [
            'nama' => $item->timestamp,
            'value' => $item->speed
        ];
    });
    $formattedData = $servo4Data->map(function ($item) {
        return [
            'nama' => $item->timestamp,
            'value' => $item->speed
        ];
    });
    $formattedData = $servo5Data->map(function ($item) {
        return [
            'nama' => $item->timestamp,
            'value' => $item->speed
        ];
    });

    return response()->json($formattedData);
});

Route::get('/tes', function () {
    return view("user.monitoring.tes");
});

Route::get('/cek', function () {
    return view('user.monitoring.cek');
});
