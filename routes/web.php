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

Route::get('/', function () {
    return view('welcome');
});

//ツイート取得動作確認
Route::get('TwitterTest', 'App\Http\Controllers\TwitterTestController@index');

//favo表示確認
Route::get('favo', 'App\Http\Controllers\TwitterTestController@favorites');

//bootstrap適用確認（削除予定）
Route::get("hello", "App\Http\Controllers\HelloController@index");

//DB情報取得確認（削除予定）
Route::get("DBtest", "App\Http\Controllers\TwitterTestController@DBtest");

Route::get("regFavo", "App\Http\Controllers\TwitterTestController@regFavo");
