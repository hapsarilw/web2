<?php

use Illuminate\Http\Request;

//Menambahkan prefix api
Route::get('users', 'UserController@users');
Route::get('p_transaksi', 'PTransaksiController@p_transaksi');



