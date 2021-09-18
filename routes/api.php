<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
Route::post('/movie',function(){
    return Movie::create([
        'title' => 'Movie One',
        'year'  => '2010',
        'rating' => '4.5',
        'description' => 'aaaaaaaaaabsojfbpirnpeirnv',
        'image' => 'scusbducb',
    ]);
});
*/

Route::get('/movie', function(){
    return Movie::all();
});