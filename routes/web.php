<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MissionController;
use Illuminate\Support\Facades\Route;

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
// route agent
Route::get('/agents', [AgentController::class,'index'])->name("agent.index");
Route::get('/agents/{id}', [AgentController::class,'show'])->name("agent.show");


//route contact
Route::get('/contacts', [ContactController::class,'index'])->name("contact.index");
Route::get('/contacts/{id}', [ContactController::class,'show'])->name("contact.show");


// route mission
Route::get('/missions', [MissionController::class,'index'])->name("mission.index");
Route::get('/missions/{id}', [MissionController::class,'index'])->name("mission.show");
