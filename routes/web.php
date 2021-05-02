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
    return view('paradisely.index');
});

Route::get('/dashboard', 'HomeController@dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/dashboard/user', 'UserController');
Route::resource('/dashboard/category', 'CategoryController');
Route::get('virtual/{slug}', 'ParadiselyController@virtual_detail');
Route::resource('/dashboard/virtual', 'VirtualController');
Route::resource('/dashboard/eksplorasi', 'ExplorationController');
Route::get('eksplorasi/{slug}', 'ParadiselyController@eksplorasi_detail');

Route::get('/eksplorasi', 'ParadiselyController@eksplorasi');
Route::get('/wisata', 'ParadiselyController@wisata');
Route::get('/peta', 'ParadiselyController@peta');
Route::get('/tentang', 'ParadiselyController@tentang');
Route::get('/virtual', 'ParadiselyController@virtual');
Route::get('/kontak', 'ParadiselyController@kontak');

Route::post('/komentar/{komentar}', 'CommentController@store');
Route::get('/dashboard/kontak', 'ContactController@index');
Route::get('/dashboard/kontak/{kontak}', 'ContactController@show');
Route::post('/kontak', 'CommentController@contact_store');

Route::get('/dependent', 'DependentDropdownController@index');
Route::get('dashboard/eksplorasi/dependentEdit/{id}', 'DependentDropdownController@getSubProvince');
Route::get('dashboard/yaahaha/{id}', 'DependentDropdownController@getSubProvince');

Route::get('/mitra/eksplorasi', 'HomeController@ekplorasi_mitra_index');
Route::get('/mitra/eksplorasi/create', 'HomeController@ekplorasi_mitra_create');
Route::get('mitra/eksplorasi/dependentEdit/{id}', 'DependentDropdownController@getSubProvince');
Route::get('/mitra/eksplorasi/{id}/edit', 'HomeController@ekplorasi_mitra_edit');
Route::patch('/mitra/eksplorasi/{id}', 'HomeController@ekplorasi_mitra_update');
Route::delete('/mitra/eksplorasi/{id}', 'HomeController@ekplorasi_mitra_destroy');
Route::post('/mitra/eksplorasi', 'HomeController@ekplorasi_mitra_store');

Route::get('/mitra/akun/', 'HomeController@akun');
Route::patch('/mitra/akun/{akun}', 'HomeController@ubahAkunProses');