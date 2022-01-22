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



/*Route Enseignant:*/
route::resource('/enseignant','EnseignantController');

/*Route Etudiant:*/
route::resource('/etudiant','EtudiantController');

/*Route Notes:*/

/*Route Cours:*/

/*Route Diplomes:*/
route::resource('/diplome','DiplomeController');



Route::get('icons', function () {
    return view('icons');
});

Route::get('map', function () {
    return view('map');
});

Route::get('tables', function () {
    return view('tables');
});

Route::get('user', function () {
    return view('user');
});

Route::get('/', function () {
    return view('authentification');
});
 




Auth::routes();

Route::resource('/home', 'HomeController');
