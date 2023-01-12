<?php

use App\Http\Controllers\UserController;
use App\Http\Livewire\Utilisateurs;
use App\Http\Livewire\clientComp;
use App\Http\Livewire\voitureComp;
use App\Http\Livewire\locationComp;
use App\Models\client;
use App\Models\location;
use App\Models\Voiture;
use Illuminate\Support\Facades\Auth;
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




Route::get('migrate', function() {
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh -—seed');
});
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Le groupe des routes relatives aux administrateurs uniquement
Route::group([
    "middleware" => ["auth", "auth.admin"],
    'as' => 'admin.'
], function(){

    Route::group([
        "prefix" => "acces",
        'as' => 'acces.'
    ], function(){

        Route::get("/utilisateurs", Utilisateurs::class)->name("users.index");
        //Route::get("/rolesetpermissions", [UserController::class, "index"])->name("rolespermissions.index");
        //

    });


});

Route::group([
    "middleware" => ["auth", "auth.manager"],
    'as' => 'manager.'
], function(){
    Route::get("/clients", clientComp::class)->name("client.index");
});



//gestion de voitures
Route::group([
    "middleware" => ["auth", "auth.manager"],
    'as' => 'manager.'
], function(){

    Route::group([
        "prefix" => "gestVoiture",
        'as' => 'gestVoiture.'
    ], function(){

        Route::get("/voitures", voitureComp::class)->name("voiture.index");

    });


});



Route::group([
    "middleware" => ["auth", "auth.manager"],
    'as' => 'manager.'
], function(){
    Route::get("/locations", locationComp::class)->name("location.index");
});