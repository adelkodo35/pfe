<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\candidatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\experienceController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\RecruteurController;
use App\Http\Controllers\rhController;
use App\Http\Controllers\SousadminController;
use App\Http\Controllers\ModerateurController;

Route::get('/singC', [candidatController::class,'index'])->name('condidat')->middleware("authx");

//Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('singC', [candidatController::class, 'create'])->name('create');

Route::get('/condidatE', function () {
    return view('cv');
});

Route::get('login', [LoginController::class, 'show'])->name('login.show');

Route::post('login', [LoginController::class, 'verify'])->name('login.verify');

Route::get('profile', [LoginController::class, 'profileC'])->name('profile');//->middleware("auth");
Route::get('logout', [LoginController::class, 'logout'])->name("logout");


Route::get('formation', [FormationController::class, 'show'])->name('formation');
Route::post('formation.create', [FormationController::class, 'create'])->name('formation.create');
Route::get('competence', [CompetenceController::class, 'show'])->name('competence.show');
Route::post('competence.create', [CompetenceController::class, 'create'])->name('competence.create');
Route::get('experioene', [experienceController::class, 'show'])->name('experioene.show');
Route::post('experioene.create', [experienceController::class, 'create'])->name('experioene.create');

// admin
Route::get('admin', [adminController::class, 'show'])->name('admin')->middleware("auth");;
Route::get('admin.logout', [adminController::class, 'logout'])->name("admin.logout");
// recruteur

Route::get('singR', [RecruteurController::class, 'show'] )->name("singR.show");
Route::post('singR', [RecruteurController::class, 'create'] )->name("singR.create");
Route::get('Recruteur', [LoginController::class, 'Recruteur'])->name("Recruteur");

// rh
Route::get('singRh', [rhController::class, 'show'])->name("singRh.show");
Route::post('singRh', [rhController::class, 'create'])->name("singRh.c");

//
Route::resource("sousadmin",SousadminController::class);
Route::get('sousadmin.block/{id}',[SousadminController::class,'block'])->name("sousadmin.block");
Route::get('sousadmin.deblock/{id}',[SousadminController::class,'deblock'])->name("sousadmin.deblock");



Route::resource("moderateur",ModerateurController::class);
Route::get('moderateur.block/{id}',[ModerateurController::class,'block'])->name("moderateur.block");
Route::get('moderateur.deblock/{id}',[ModerateurController::class,'deblock'])->name("moderateur.deblock");

















































































































































































;
