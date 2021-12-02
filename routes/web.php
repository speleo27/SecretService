<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\MissionInfoController;
use App\Http\Controllers\SafeHouseController;
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
})->name("home");
// route agent
Route::get('/agents', [AgentController::class,'index'])->name("agent.index");
Route::get('/agents/{id}', [AgentController::class,'show'])->name("agent.show");
Route::get('/creation-agent', [AgentController::class, 'create'])->name("agent.create");
Route::post('/creation-agent', [AgentController::class, 'store'])->name("agent.store");
Route::delete('/supprimer_agent/{id}',[AgentController::class,'destroy'])->name("agent.destroy");
Route::get('/mettre-a-jour-agent/{id}',[AgentController::class,"edit"])->name("agent.edit");
Route::patch('/mettre-a-jour-contact/{id}', [AgentController::class,'update'])->name("agent.update");

//route contact
Route::get('/contacts', [ContactController::class,'index'])->name("contact.index");
Route::get('/contacts/{id}', [ContactController::class,'show'])->name("contact.show");
Route::get('/creation-contacts', [ContactController::class, 'create'])->name("contact.create");
Route::post('/creation-contacts', [ContactController::class, 'store'])->name("contact.store");
Route::delete('/supprimer-contact/{id}',[ContactController::class,'destroy'])->name("contact.destroy");
Route::get('/mettre-a-jour-contact/{id}', [ContactController::class,'edit'])->name("contact.edit");
Route::patch('/mettre-a-jour-contact/{id}', [ContactController::class,'update'])->name("contact.update");




// route mission
Route::get('/missions', [MissionController::class,'index'])->name("mission.index");
Route::get('/missions/{id}', [MissionController::class,'show'])->name("mission.show");
Route::get('/creation-mission', [MissionController::class, 'create'])->name("mission.create");

// route target
Route::get('/targets', [TargetController::class,'index'])->name("target.index");
Route::get('/targets/{id}', [TargetController::class,'show'])->name("target.show");
Route::get('/creation-target', [TargetController::class, 'create'])->name("target.create");

// route safe house
Route::get('/safe_houses', [SafeHouseController::class,'index'])->name("safe_house.index");
Route::get('/safe_houses/{id}', [SafeHouseController::class,'show'])->name("safe_house.show");
Route::get('/creation-safe_house', [SafeHouseController::class, 'create'])->name("safe_house.create");
