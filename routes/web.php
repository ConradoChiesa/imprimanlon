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
Route::get('/account', function () {
    return view('account');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
    'clients' => 'ClientController'
]);

Route::get('/presupuesto', 'budgetController@create')->name('budget');
Route::post('presupuesto', 'budgetController@store');

Auth::routes();

Route::post('upload', 'budgetController@send_budget');
