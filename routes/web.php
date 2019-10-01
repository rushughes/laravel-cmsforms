<?php

use Carbon\Carbon;

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

Route::group(['middleware' => 'web'], function () {
  Route::resource('/posts', 'PostsController');

  Route::get('/dates', function () {
    $date = new DateTime('+1 week');
    echo $date->format('Y-m-d');
    echo '<br />';
    echo Carbon::now();
    echo '<br />';
    echo Carbon::now()->diffForHumans();
    echo '<br />';
    echo Carbon::now()->addDays(4)->diffForHumans();
    echo '<br />';
    echo Carbon::now()->subMonths(4);
    echo '<br />';
    echo Carbon::now()->yesterday();
    echo '<br />';
    echo Carbon::now()->yesterday()->diffForHumans();
  });
});
