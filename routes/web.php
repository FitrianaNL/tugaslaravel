<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login','AuthController@index')->name('login');
Route::post('/sendlogin','AuthController@sendLoginRequest')->name('login_action');
Route::get('/logout', 'AuthController@logout')->name('logout_action');

// Route::group(['middleware' => 'auth'], function () {
Route::get('/kalkulator','KalkulatorController@index');
Route::post('/proses','KalkulatorController@tambah')->name('proses.tambah');

Route::get('barang','BarangController@index')->name('tampil_barang');
Route::get('barang/create','BarangController@createData')->name('create_barang');
Route::post('barang/post','BarangController@postData')->name('post_barang');

Route::get('barang/edit/{id}','BarangController@editData')->name('edit_data');
Route::post('barang/update/{id}','BarangController@updateData')->name('update_data');

Route::get('/barang/hapus/{id}', 'BarangController@softDelete')->name('delete_data');
// });