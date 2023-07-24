<?php


use App\Http\Controllers\ProdutoController;

use Illuminate\Support\Facades\Route;

/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

| Here is where you can register web routes for your application. These

| routes are loaded by the RouteServiceProvider and all of them will

| be assigned to the "web" middleware group. Make something great!

*/

Route::get('/', function () {

    return view('welcome');

});

Route::resource('produtos',ProdutoController::class);

/*use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});

//abaixo adicionado do material da semana 6 do curso
Route::resource('produtos',ProdutoController::class);
*/