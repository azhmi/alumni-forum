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
Route::get('/', 'berandaController@index');
Route::get('/edit-profil', 'berandaController@edit');
Route::patch('/edit-profil/update', 'berandaController@update');


//berita
Route::get('/berita', 'BeritaController@index');

Route::get('/berita/tambah', 'BeritaController@create');

Route::post('/berita/tambah/save', 'BeritaController@store');

Route::get('/berita/edit/{id}', 'BeritaController@show');
Route::patch('/berita/edit/{id}/save', 'BeritaController@update');
Route::delete('/berita/delete/{id}', 'BeritaController@destroy');

Route::get('/berita/detail/{id}', 'BeritaController@detail');

//loker
Route::get('/lowongan', 'LokerController@index');
Route::get('/lowongan/tambah', 'LokerController@create');

Route::post('/lowongan/tambah/save', 'LokerController@store');
Route::get('/lowongan/detail/{id}', 'LokerController@show');
Route::get('/lowongan/edit/{id}', 'LokerController@edit');
Route::delete('/lowongan/delete/{id}', 'LokerController@destroy');
Route::patch('/lowongan/edit/{id}/save', 'LokerController@update');


//alumni
Route::get('/alumni', 'AlumniController@index');

Route::delete('/alumni/hapus/{id}', 'AlumniController@destroy');
Route::get('/alumni/tambah', 'AlumniController@create');
Route::get('/alumni/edit/{id}', 'AlumniController@edit');
Route::patch('/alumni/edit/{id}/save', 'AlumniController@update');

//forum
Route::get('/forum', 'ForumController@index');
Route::get('/forum/tambah', 'ForumController@create');
Route::post('/forum/tambah/save', 'ForumController@store');
Route::get('/forum/detail/{id}', 'ForumController@show');
Route::get('/forum/detail/{id}/edit/{id2}', 'KomenController@show');
Route::post('/forum/detail/komen/save', 'KomenController@store');
Route::patch('/forum/detail/komen/{id}/update', 'KomenController@update');
Route::delete('/komen/delete/{id}', 'KomenController@destroy');

Route::get('/forum/edit/{id}', 'ForumController@edit');
Route::patch('/forum/edit/{id}/save', 'ForumController@update');
Route::delete('/forum/delete/{id}', 'ForumController@destroy');


Route::get('/add-lowongan', function () {
    return view('page.lowongan.add');
});


Route::get('/detail-loker', function () {
    return view('page.lowongan.detail');
});



Route::get('/komentar', function () {
    return view('page.forum.detail');
});

Route::get('/tulis-forum', function () {
    return view('page.forum.add');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/kirimemail','testemailController@index');