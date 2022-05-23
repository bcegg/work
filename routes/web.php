<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\RestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StampController;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//打刻画面
Route::get('/stamp',[StampController::class,'index']);
Route::get('/stamp',[RestController::class,'index']);
//出退勤
Route::post('/stamp/begin',[StampController::class,'begin']);
Route::post('/stamp/finish',[StampController::class,'finish']);
//休憩
Route::post('/restin',[RestController::class,'restin']);
Route::post('/restout',[RestController::class,'restout']);
