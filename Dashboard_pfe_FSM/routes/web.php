<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;



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
    return view('Login_V');

});

Route::get('/AjouterMission',[Controller::class, "NewMission"])->name('NewMission');


Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/Register_V',function(){
  return view('/Register_V');
});

Route::post('/Login_V',[Controller::class, "Login"])->name('connectUser');
Route::post('/RegisterPage',[Controller::class, "Create"])->name('createUser');
Route::post('/NewMission',[Controller::class, "CreateNewMission"])->name('mission');
Route::post('/FormEmploy',[Controller::class, "CreateHopital"])->name('createEtbSante');


