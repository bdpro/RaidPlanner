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

Route::get('/', 'PagesController@home');


Route::resource('webagencyfail','web_agency_failsController');
Route::resource('accueil','accueilController');
Route::resource('blogs','blogsController');
Route::resource('gearpannel','gearPannelController');
Route::resource('raidplanner','EventController' );
Route::resource('raid','RaidController');
Route::resource('profil','ProfilController');
Route::resource('users','UsersController')->middleware('admin');


//lien ajouté automatiquement pour login/register
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//FULLCALENDAR
Route::post('raidplanner', 'EventController@addEvent')->name('events.add');
Route::post('gearpannel/update', 'gearPannelController@update');

