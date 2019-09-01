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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/narasumber', 'NarasumberController@index')->name('narasumber.index');

Auth::routes();
Route::resource('event', 'EventController');
Route::resource('eventregister', 'EventRegisterController');

Route::middleware('auth')->group(function() {
    Route::resource('src', 'Dashboard');
    Route::resource('panel/bidangkeahlian', 'BidangKeahlian');
    Route::resource('panel/bidangumkm', 'BidangUMKM');
    Route::resource('panel/jeniskegiatan', 'JenisKegiatan');
    Route::resource('panel/masalah', 'JenisMasalah');
    Route::resource('panel/permintaan', 'permintaanUMKM');
    Route::resource('panel/datanarasumber', 'narasumberData');
    Route::resource('panel/dataumkm', 'UMKMData');
    Route::resource('panel/listpenerimaan', 'penerimaanData');
    Route::resource('panel/myprofile', 'profileUsers');
    Route::resource('panel/detailnarasumber', 'NarasumberDetail');
    Route::resource('panel/detailUMKM', 'UMKMDetail');
    Route::resource('panel/kegiatanUMKM', 'KegiatanUMKM');
    Route::resource('panel/dataregisterkegiatan', 'dataKegiatanUser');
    Route::resource('panel/datakuesioner', 'dataKuesioner');
    Route::resource('panel/detailkuesioner', 'formKuesioner');
    Route::resource('panel/ratekuesioner', 'datarateKuesioner');
    Route::resource('panel/detailratekuesioner', 'datadetailrateKuesioner');

});