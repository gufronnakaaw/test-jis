<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::middleware('auth')->group(function(){
    Route::get('/', function () {
        return view('home');
    });

    Route::middleware('role')->group(function(){
        Route::get('/dashboard', function () {
            return view('dashboard');
        });
    
        Route::get('/laporan', function () {
            return view('laporan');
        });
        
        Route::get('/pengajuan-jaminan', function () {
            return view('pengajuan-jaminan');
        });
    
        Route::get('/approval', function () {
            return view('approval');
        });
    
        Route::get('/data-jaminan', function () {
            return view('data-jaminan');
        });
    
        Route::get('/data-surety-bond', function () {
            return view('data-surety-bond');
        });
    
        Route::get('/manajemen-user', function () {
            return view('manajemen-user');
        });
    
        Route::get('/setting', function () {
            return view('setting');
        });
    });

});

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('alreadylogin');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::post('/login', [AuthController::class, 'check'])->middleware('alreadylogin');