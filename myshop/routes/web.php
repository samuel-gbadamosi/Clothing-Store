<?php

use App\Http\Controllers\DressController;
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


// //controller name for index,chisiamo annd contact
// Route::get('/' , 'HomeController@index')->name('home');
// Route::get('/contatti' , 'HomeController@contatti')->name('contatti');
// Route::get('/chisiamo' , 'HomeController@chisiamo')->name('chisiamo');
// Route::get('/autori' , 'HomeController@autori')->name('autori');


Route::resource('dresses', 'DressController');

