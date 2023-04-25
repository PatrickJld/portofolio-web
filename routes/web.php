<?php

use Illuminate\Support\Facades\Route;
use App\Models\Exps;
use App\Models\Skills;
use App\Http\Controllers\Exp;
use App\Http\Controllers\Skill;
use App\Http\Controllers\Auth;

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

// login
Route::get('/login', [Auth::class, 'index']);
Route::post('/login', [Auth::class, 'login']);
Route::get('/logout', [Auth::class, 'logout']);

Route::get('/', function () {
    $data = Exps::get();
    $data2 = Skills::get();
    return view('landing')->with(['exps' => $data, 'skills' => $data2]);
});

Route::post('/exp', [Exp::class, 'store']);
Route::patch('/exp/{exp}', [Exp::class, 'update']);
Route::delete('/exp/{exp}', [Exp::class, 'destroy']);

Route::post('/skill', [Skill::class, 'store']);
Route::patch('/skill/{skill}', [Skill::class, 'update']);
Route::delete('/skill/{skill}', [Skill::class, 'destroy']);
