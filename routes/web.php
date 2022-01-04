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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/periode/3/blog/profile', function () {
    return view('/periode/3/blog/profile');
});

Route::get('/periode/3/blog/create', function () {
    return view('/periode/3/blog/create');
});


// Routes periodes 3 t/m 12

Route::get('/periode/3', function() {
    return view('/periode/3');
});

Route::get('/periode/4', function() {
    return view('/periode/4');
});

Route::get('/periode/5', function() {
    return view('/periode/5');
});

Route::get('/periode/6', function() {
    return view('/periode/6');
});

Route::get('/periode/7', function() {
    return view('/periode/7');
});

Route::get('/periode/8', function() {
    return view('/periode/8');
});

Route::get('/periode/9', function() {
    return view('/periode/9');
});

Route::get('/periode/10', function() {
    return view('/periode/10');
});

Route::get('/periode/11', function() {
    return view('/periode/11');
});

Route::get('/periode/12', function() {
    return view('/periode/12');
});

// End periode routes 3 t/m 12




// Start periode 3 routes

Route::get('/periode/3/blog', function() {
    return view('logister');
});

Route::get('/periode/3/open-source', function() {
    return view('/periode/3/open-source');
});

Route::get('/periode/3/portfolio-3-0', function() {
    return view('/periode/3/portfolio-3-0');
});

Route::get('/periode/3/JSON-open-data', function() {
    return view('/periode/3/JSON-open-data');
});

Route::get('/periode/3/rail-fence-cipher', function() {
    return view('/periode/3/rail-fence-cipher');
});

Route::get('/logout', function() {
    if(isset(Auth::User()->name)) {
        Auth::logout();
    }
    return redirect('/login');
});

Route::get('/periode/3/blog/comment', 'commentController@Store');



// end periode 3 routes

Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


//json opensource

Route::get('/json', 'OpenDataController@opendata');

