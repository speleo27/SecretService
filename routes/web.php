<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\MissionInfoController;
use App\Http\Controllers\TargetController;
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
Route::get('/creation-agent', [AgentController::class, 'create'])->name("agent.create");

//route contact
Route::get('/contacts', [ContactController::class,'index'])->name("contact.index");
Route::get('/contacts/{id}', [ContactController::class,'show'])->name("contact.show");
Route::get('/creation-contacts', [AgentController::class, 'create'])->name("contact.create");

// route mission
Route::get('/missions', [MissionController::class,'index'])->name("mission.index");
Route::get('/missions/{id}', [MissionController::class,'show'])->name("mission.show");
Route::get('/creation-mission', [AgentController::class, 'create'])->name("mission.create");

// route target
Route::get('/targets', [TargetController::class,'index'])->name("target.index");
Route::get('/targets/{id}', [TargetController::class,'show'])->name("target.show");
Route::get('/creation-target', [AgentController::class, 'create'])->name("target.create");

// route safe house
Route::get('/safe_houses', [TargetController::class,'index'])->name("safe_house.index");
Route::get('/safe_houses/{id}', [TargetController::class,'show'])->name("safe_house.show");
Route::get('/creation-safe_house', [AgentController::class, 'create'])->name("safe_house.create");
