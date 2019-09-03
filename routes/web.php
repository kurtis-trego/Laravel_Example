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
/*
Route::get('/', function () {
    return view('welcome');
});
*/


//Routing Through a Controller
Route::get('/', 'PagesController@index');
Route::get('index', 'PagesController@index');
Route::get('about' , 'PagesController@about');

//Example Passing Into
//Route::get('attendance/{id}', ['as' => 'user.attendance', 'uses' => 'UserController@attendance']);


Route::get('data', 'DataController@getData');
Route::post('insert', 'DataController@insert');
Route::get('edit/{id}', 'DataController@edit');
Route::get('delete/{id}', 'DataController@delete');

Route::get('updateData/{id}', 'DataController@showData');
Route::get('editDB', 'DataController@updateData');

Route::get('editEmail/{id}', 'DataController@editEmail');
Route::post('editEmail/{id}', 'DataController@userProvidedEmail')->name('editEmail.update');

Route::get('test', 'TestController@create')->name('test.create');
Route::post('test', 'TestController@store')->name('test.store');

Route::get('report', 'ReportController@showData');
Route::get('weekly', 'ReportController@showWeeklyData');


Route::get('form', 'FormController@create')->name('form.create');
Route::post('form', 'FormController@store')->name('form.store');



//Test Database routes
//Display Form for user
Route::get('posts/create', 'PostsController@create');
//Store New Blog Post In Database
Route::post('post', 'PostsController@store');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
