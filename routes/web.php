<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookcontroller;

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
});


Route::get('/uploadbooks', function () {
    return view('uploadbooks');
});

Route::get('/getbooksfromcate/{category}', [bookcontroller::class,'getBooksFromCategory']);

Route::get('/getbooksfromemail/{email}', [bookcontroller::class,'getBooksFromEmail']);

Route::get('/getbooks',[bookcontroller::class,'getBooks'] );

Route::post('/uploadbooks',[bookcontroller::class,'uploadBooks'] );
