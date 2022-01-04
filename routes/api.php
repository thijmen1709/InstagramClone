<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Bio;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/periode/3/blog/profile', function (Request $request) {

    return response()->json(['username' => Auth::User()->name, 'bio' => Auth::User()->bio, 'post' => Auth::User()->posts()->get()]);
});

Route::middleware('auth:api')->resource('bio', 'api\BioController');
Route::middleware('auth:api')->resource('post', 'api\PostController');


//Route::get('periode/3/blog/user/{userName}', 'api\getUsers@index');

