<?php

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


Route::get("/", "HomeController@home")->name('home');

Route::get("/login/", "LoginController@login")->name('login');

Route::get("/cadastro/", "CadastroController@cadastro")->name('cadastro');

Route::post("/logar/", "LoginController@logar")->name('logar');

Route::post("/cadastrar/", "CadastroController@cadastrar")->name('cadastrar');

Route::get("/home/", "HomeController@homePage")->name('homePage');
