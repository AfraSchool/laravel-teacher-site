<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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
    if (!\Illuminate\Support\Facades\Session::get('auth')) {
        return redirect('login');
    }
    return redirect('/dashboard');
});

Route::get('/login', ['uses'=>'LoginController@index']);
Route::get('dashboard', 'DashboardController@index')->middleware('Auth');
Route::group(['prefix'=>'/'], function () {
    Route::get('dashboard/news', 'NewsController@news');
    Route::get('dashboard/news/edit/{id}', 'NewsController@edit')->name('news.edit');
    Route::get('dashboard/news/del/{id}', 'NewsController@deleteIndex');
    Route::get('dashboard/news/del/{id}', 'NewsController@down');
    Route::get('dashboard/tools/news/add', 'NewsController@index');
    Route::post('dashboard/tools/news/add', 'NewsController@send');
});
// API
Route::group(['prefix' => '/api/v1'], function () {
    Route::match(['get', 'post'], '/userLogin', 'LoginController@login');
});


