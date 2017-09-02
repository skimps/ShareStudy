<<<<<<< HEAD
<<<<<<< HEAD
<?php

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

Route::get('/', 'timetableController@show');

Route::get('/','')




=======
=======
>>>>>>> 7078dd0dfdeaf29eefb7997593abf1f2407f21ba
<?php

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

Route::get('/NoteEditing','NoteEditingController@PushEditedData');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
