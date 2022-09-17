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
use App\Http\Controllers\ListeController;
use App\Http\Controllers\DemandeController;

Route::get('/singC', [candidatController::class,'index'])->name('condidat');


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
Route::get('singRh/plus', [rhController::class, 'plus'])->name("singRh.plus");
Route::get('RH.home', [rhController::class, 'home'])->name("RH.home");
Route::get('RH.show/{id}', [rhController::class, 'view'])->name("RH.show");
Route::post('singRh/plus', [rhController::class, 'create_plus'])->name("singRh_plus");

Route::get('RH.home/listc', [candidatController::class,'show_all'])->name('list_candidate');

Route::get('RH.home/listc/{id}', [candidatController::class,'show_c'])->name('candidat.profile');

//
Route::resource("sousadmin",SousadminController::class);
Route::get('sousadmin.block/{id}',[SousadminController::class,'block'])->name("sousadmin.block");
Route::get('sousadmin.deblock/{id}',[SousadminController::class,'deblock'])->name("sousadmin.deblock");
Route::get('sousadmin.login',[SousadminController::class,'login'])->name("sousadmin.login");
Route::get('sousadmin.inscriptionRH',[SousadminController::class,'inscriptionRH'])->name("sousadmin.inscriptionRH");
Route::post('sousadmin.destroy.rh/{id}',[SousadminController::class,'destroyrh'])->name("sousadmin.destroy.rh");



Route::resource("moderateur",ModerateurController::class);
Route::get('moderateur.block/{id}',[ModerateurController::class,'block'])->name("moderateur.block");
Route::get('moderateur.deblock/{id}',[ModerateurController::class,'deblock'])->name("moderateur.deblock");

Route::resource("Liste",ListeController::class);

Route::post('liste',[ListeController::class,'star'])->name("liste.star");

Route::resource("Demande",DemandeController::class);













































































































































































;
