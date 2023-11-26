<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaControler;

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

Route::get('/', [PizzaControler::class, 'home']);
Route::get('/orderpizza', [PizzaControler::class, 'orderpizza']);
Route::post('/orderpizza',[PizzaControler::class, 'create']);
Route::get('/login',function(){
        return view('/login');
});
//Route::get('/showpizza/{id}',[PizzaControler::class, 'showpizza']);

Route::delete('/showpizza/{id}',[PizzaControler::class, 'destroy']);
Route::get('/showpizza',[PizzaControler::class, 'show']);
Route::post('/showpizza',[pizzaControler::class,'matching']);
