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

Auth::routes();


Route::group(['middleware' => ['auth']], function () { 

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/Feedback', [App\Http\Controllers\HomeController::class, 'feedback'])->name('Feedback');
    /** all users lists */
    Route::get('dashboard', 'App\Http\Controllers\AdminController@allusers');
    /**users feedback */
    Route::get('users-feedback','App\Http\Controllers\AdminController@index');
    Route::get('users-feedback/edit/{id}', 'App\Http\Controllers\AdminController@show');
    Route::post('users-feedback/edit/{id}','App\Http\Controllers\AdminController@edit');
    Route::get('users-feedback/delete/{id}','App\Http\Controllers\AdminController@delete');


    /** add names **/
    Route::post('add-names','App\Http\Controllers\AdminController@insert')->name('addnames');
    Route::get('add-names','App\Http\Controllers\AdminController@selectnames');

    Route::get('add-names/edit/{id}', 'App\Http\Controllers\AdminController@showselectname');
    Route::post('add-names/edit/{id}', 'App\Http\Controllers\AdminController@selectnameupdate');
    Route::get('add-names/delete/{id}', 'App\Http\Controllers\AdminController@selectnamedelete');


/**logout */
Route::get('/logout', 'App\Http\Controllers\AdminController@logout');

});
