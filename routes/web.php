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
Auth::routes();
Route::get('/', function () {
  return view('public/landing', [
    'title' => 'Beranda',
    'images' => [
      'banner2.jpeg',
      'poster2.jpg'
    ]
  ]);
});

Route::get('/survey', function() {
  return view('public/survey-alumni', ['title' => 'Form Survey Alumni']);
});

Route::post('/survey', 'FormAlumniController@post');

Route::get('/prestasi', function() {
  return view('public/prestasi', ['title' => 'Prestasi']);
});

Route::get('/pengumuman', function() {
  return view('public/pengumuman', ['title' => 'Pengumuman']);
});
Route::get('/events', function() {
  return view('public/events', ['title' => 'Events']);
});
Route::get('/single', function() {
  return view('public/single', ['title' => 'Single']);
});
Route::get('/pkl', function() {
    return view('public/pkl', ['title' => 'PKL']);
  });
  Route::get('/tugasakhir', function() {
    return view('public/ta', ['title' => 'Tugas Akhir']);
  });
  
  //ADMIN ROLE
Route::group(['middleware' => ['auth', 'checkrole:admin']], function () {
    Route::get('/home', 'AdminController@index')->name('admin');
    Route::get('/dashboard/admin', 'AdminController@index')->name('admin');
    Route::group(['prefix' => 'dashboard/admin'], function () {
        // Route::resource("prestasi", "PrestasiController");
        Route::group(['prefix' => 'mahasiswa'], function () {
            Route::resource("prestasi", "PrestasiController");
            Route::resource("datamhs", "MahasiswaController");
            Route::resource("ta", "TugasakhirController");
            Route::resource("pkl", "PklController");
        });
        Route::group(['prefix' => 'news'], function () {
           Route::resource("berita", "BeritaController");
           Route::resource("event", "EventController");
           Route::resource("pengumuman", "PengumumanController");
        });
        Route::resource("alumni", "AlumniController");
    });
    
});

//MHS ROLE

Route::group(['middleware' => ['auth', 'checkrole:mahasiswatf']], function () {
  Route::get('/home', 'AdminController@index');
    Route::get('/dashboard/mahasiswa', 'AdminController@index');
  
});