<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get("/",function(){
    return view("accueil");
})->name("accueil");

Route::get("/filiere",function(){
    return view("filiere");
})->name("filiere");
Route::view("contact","contact")->name("contact");
Route::view("equipe","equipe")->name("equipe");
Route::view("index","index")->name("index");
Route::view("filiere","filiere")->name("filiere");
Route::get("/quizz1/{id}",function($id){
return view("quizz1",compact("id"));
});
Route::view("mainpageapp","mainpageapp")->name("mainpage");
Route::post("/user", [UserController::class, "store"]);