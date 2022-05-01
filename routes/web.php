<?php

use App\Http\Controllers\DomainController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});
// Route::get('/ss', function () {
//     return view('master');
// });
Route::get('/lock/{id}','DomainController@lock');
Route::get('/unlock/{id}','DomainController@unlock');
Route::resource('domain', 'DomainController');

Route::get('/domain/delete/{id}',[
    'as' => 'domain.delete',
    'uses'=>'DomainController@delete'
]);
Auth::routes();
Route::get('/home', 'HomeController@index');

 