<?php

use App\Http\Controllers\BukuBesarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\InsidentilController;
use App\Http\Controllers\KhususController;
use App\Http\Controllers\PadController;
use App\Http\Controllers\PrinsipController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\TaksiController;
use App\Http\Controllers\TargetController;
use App\Http\Controllers\UsahaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrayekController;

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

Route::get('/', [HomeController::class, 'index']);


Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/v_lintrayek/lintrayek', [TrayekController::class, 'index'])->name('lintrayek');
Route::get('/v_lintrayek/detail/{id}', [TrayekController::class, 'detail']);
Route::get('/v_lintrayek/add', [TrayekController::class, 'add']);
Route::post('/v_lintrayek/insert', [TrayekController::class, 'insert']);
Route::get('/v_lintrayek/edit/{id}', [TrayekController::class, 'edit']);
Route::post('/v_lintrayek/update/{id}', [TrayekController::class, 'update']);
Route::get('/v_lintrayek/delete/{id}', [TrayekController::class, 'delete']);
Route::get('/v_lintrayek/printpdf', [TrayekController::class, 'printpdf']);
Route::get('/v_lintrayek/printseluruhlintasan', [TrayekController::class, 'printseluruhlintasan']);
Route::get('/v_lintrayek/formangkutan', [TrayekController::class, 'formangkutan']);
Route::get('/v_lintrayek/printangkutankota/{jns}', [TrayekController::class, 'printangkutankota']);
Route::get('/v_lintrayek/printlintrayek/{id}', [TrayekController::class, 'printlintrayek']);

Route::get('/v_trayek/trayek', [TrayekController::class, 't_index'])->name('trayek');
Route::get('/v_trayek/add', [TrayekController::class, 't_add']);
Route::post('/v_trayek/insert', [TrayekController::class, 't_insert']);
Route::get('/v_trayek/detail/{id}', [TrayekController::class, 't_detail']);
Route::get('/v_trayek/delete/{id}', [TrayekController::class, 't_delete']);
Route::get('/v_trayek/edit/{id}', [TrayekController::class, 't_edit']);
Route::post('/v_trayek/update/{id}', [TrayekController::class, 't_update']);
Route::get('/v_trayek/cetaksk/{id}', [TrayekController::class, 'cetaksk']);
Route::get('/v_trayek/cetakkp/{id}', [TrayekController::class, 'cetakkp']);
Route::get('/v_trayek/formkegiatan', [TrayekController::class, 'formkegiatan']);
Route::get('/v_trayek/formpenerimaan', [TrayekController::class, 'formpenerimaan']);
Route::get('/v_trayek/cetaklaporan/{tglawal}', [TrayekController::class, 'cetaklaporanTanggal']);
Route::get('/v_trayek/cetaklaporan/{tglawal}/{tglakhir}', [TrayekController::class, 'cetaklaporanPertanggal']);
Route::get('/v_trayek/cetakpenerimaan/{tglawal}', [TrayekController::class, 'cetakpenerimaanTanggal']);
Route::get('/v_trayek/cetakpenerimaan/{tglawal}/{tglakhir}', [TrayekController::class, 'cetakpenerimaanPertanggal']);
Route::get('/v_trayek/formpemilik', [TrayekController::class, 'formpemilik']);
Route::get('/v_trayek/cetakpemilik/{pmlk}', [TrayekController::class, 'cetakpemilik']);
Route::get('/v_trayek/formperusahaan', [TrayekController::class, 'formperusahaan']);
Route::get('/v_trayek/cetakperusahaan/{prshaan}', [TrayekController::class, 'cetakperusahaan']);
Route::get('/v_trayek/formlintertentu', [TrayekController::class, 'formlintertentu']);
Route::get('/v_trayek/cetaklintertentu/{lin}', [TrayekController::class, 'cetaklintertentu']);

Route::get('/v_taksi/taksi', [TaksiController::class, 'index'])->name('taksi');
Route::get('/v_taksi/detail/{id}', [TaksiController::class, 'detail']);
Route::get('/v_taksi/cetaksk/{id}', [TaksiController::class, 'cetaksk']);
Route::get('/v_taksi/cetakkp/{id}', [TaksiController::class, 'cetakkp']);
Route::get('/v_taksi/add', [TaksiController::class, 'add']);
Route::post('/v_taksi/insert', [TaksiController::class, 'insert']);
Route::get('/v_taksi/edit/{id}', [TaksiController::class, 'edit']);
Route::post('/v_taksi/update/{id}', [TaksiController::class, 'update']);
Route::get('/v_taksi/delete/{id}', [TaksiController::class, 'delete']);
Route::get('/v_taksi/formkegiatan', [TaksiController::class, 'formkegiatan']);
Route::get('/v_taksi/formpenerimaan', [TaksiController::class, 'formpenerimaan']);
Route::get('/v_taksi/cetaklaporan/{tglawal}', [TaksiController::class, 'cetaklaporanTanggal']);
Route::get('/v_taksi/cetaklaporan/{tglawal}/{tglakhir}', [TaksiController::class, 'cetaklaporanPertanggal']);
Route::get('/v_taksi/cetakpenerimaan/{tglawal}', [TaksiController::class, 'cetakpenerimaanTanggal']);
Route::get('/v_taksi/cetakpenerimaan/{tglawal}/{tglakhir}', [TaksiController::class, 'cetakpenerimaanPertanggal']);


Route::get('/v_prinsip/prinsip', [PrinsipController::class, 'index'])->name('prinsip');
Route::get('/v_prinsip/detail/{id}', [PrinsipController::class, 'detail']);
Route::get('/v_prinsip/add', [PrinsipController::class, 'add']);
Route::post('/v_prinsip/insert', [PrinsipController::class, 'insert']);
Route::get('/v_prinsip/edit/{id}', [PrinsipController::class, 'edit']);
Route::post('/v_prinsip/update/{id}', [PrinsipController::class, 'update']);
Route::get('/v_prinsip/delete/{id}', [PrinsipController::class, 'delete']);
Route::get('/v_prinsip/cetakprinsip/{id}', [PrinsipController::class, 'cetakprinsip']);
Route::get('/v_prinsip/formkegiatan', [PrinsipController::class, 'formkegiatan']);
Route::get('/v_prinsip/formpenerimaan', [PrinsipController::class, 'formpenerimaan']);
Route::get('/v_prinsip/cetaklaporan/{tglawal}', [PrinsipController::class, 'cetaklaporanTanggal']);
Route::get('/v_prinsip/cetaklaporan/{tglawal}/{tglakhir}', [PrinsipController::class, 'cetaklaporanPertanggal']);
Route::get('/v_prinsip/cetakpenerimaan/{tglawal}', [PrinsipController::class, 'cetakpenerimaanTanggal']);
Route::get('/v_prinsip/cetakpenerimaan/{tglawal}/{tglakhir}', [PrinsipController::class, 'cetakpenerimaanPertanggal']);



Route::get('/v_usaha/usaha', [UsahaController::class, 'index'])->name('usaha');
Route::get('/v_usaha/detail/{id}', [UsahaController::class, 'detail']);
Route::get('/v_usaha/cetakkartu/{id}', [UsahaController::class, 'cetakkartu']);
Route::get('/v_usaha/add', [UsahaController::class, 'add']);
Route::post('/v_usaha/insert', [UsahaController::class, 'insert']);
Route::get('/v_usaha/edit/{id}', [UsahaController::class, 'edit']);
Route::post('/v_usaha/update/{id}', [UsahaController::class, 'update']);
Route::get('/v_usaha/delete/{id}', [UsahaController::class, 'delete']);
Route::get('/v_usaha/formkegiatan', [UsahaController::class, 'formkegiatan']);
Route::get('/v_usaha/formpenerimaan', [UsahaController::class, 'formpenerimaan']);

// Route::get('/v_usaha/formklasifikasidetail', [UsahaController::class, 'formklasifikasi']);
// Route::get('/v_usaha/cetakklasifikasidetail/{tglawal}', [UsahaController::class, 'cetakklasifikasidetailTanggal']);
// Route::get('/v_usaha/cetakklasifikasidetail/{tglawal}/{tglakhir}', [UsahaController::class, 'cetakklasifikasidetailPertanggal']);
// Route::get('/v_usaha/formklasifikasi', [UsahaController::class, 'formklasifikasi']);
Route::get('/v_usaha/cetaklaporan/{tglawal}', [UsahaController::class, 'cetaklaporanTanggal']);
Route::get('/v_usaha/cetaklaporan/{tglawal}/{tglakhir}', [UsahaController::class, 'cetaklaporanPertanggal']);
Route::get('/v_usaha/cetakpenerimaan/{tglawal}', [UsahaController::class, 'cetakpenerimaanTanggal']);
Route::get('/v_usaha/cetakpenerimaan/{tglawal}/{tglakhir}', [UsahaController::class, 'cetakpenerimaanPertanggal']);

Route::get('/v_usaha/klasifikasiretri', [UsahaController::class, 'klasifikasi'])->name('klasifikasi');
Route::get('/v_usaha/addklasifikasi', [UsahaController::class, 'addklasifikasi']);
Route::post('/v_usaha/insertklasifikasi', [UsahaController::class, 'insertklasifikasi']);
Route::get('/v_usaha/editklasifikasi/{id}', [UsahaController::class, 'editklasifikasi']);
Route::post('/v_usaha/updateklasifikasi/{id}', [UsahaController::class, 'updateklasifikasi']);
Route::get('/v_usaha/deleteklasifikasi/{id}', [UsahaController::class, 'deleteklasifikasi']);
Route::get('/v_usaha/formklasifikasiglobal', [UsahaController::class, 'formklasifikasiglobal']);
Route::get('/v_usaha/klasifikasiglobal/{tglawal}', [UsahaController::class, 'klasifikasiglobalTanggal']);
Route::get('/v_usaha/klasifikasiglobal/{tglawal}/{tglakhir}', [UsahaController::class, 'klasifikasiglobalPertanggal']);





Route::get('/v_khusus/khusus', [KhususController::class, 'index'])->name('khusus');
Route::get('/v_khusus/detail/{id}', [KhususController::class, 'detail']);
Route::get('/v_khusus/add', [KhususController::class, 'add']);
Route::post('/v_khusus/insert', [KhususController::class, 'insert']);
Route::get('/v_khusus/edit/{id}', [KhususController::class, 'edit']);
Route::post('/v_khusus/update/{id}', [KhususController::class, 'update']);
Route::get('/v_khusus/delete/{id}', [KhususController::class, 'delete']);
Route::get('/v_khusus/formkegiatan', [KhususController::class, 'formkegiatan']);
Route::get('/v_khusus/formpenerimaan', [KhususController::class, 'formpenerimaan']);
Route::get('/v_khusus/cetaklaporan/{tglawal}', [KhususController::class, 'cetaklaporanTanggal']);
Route::get('/v_khusus/cetaklaporan/{tglawal}/{tglakhir}', [KhususController::class, 'cetaklaporanPertanggal']);
Route::get('/v_khusus/cetakpenerimaan/{tglawal}', [KhususController::class, 'cetakpenerimaanTanggal']);
Route::get('/v_khusus/cetakpenerimaan/{tglawal}/{tglakhir}', [KhususController::class, 'cetakpenerimaanPertanggal']);

Route::get('/v_insidentil/insidentil', [InsidentilController::class, 'index'])->name('insidentil');
Route::get('/v_insidentil/add', [InsidentilController::class, 'add']);
Route::post('/v_insidentil/insert', [InsidentilController::class, 'insert']);
Route::get('/v_insidentil/edit/{id}', [InsidentilController::class, 'edit']);
Route::post('/v_insidentil/update/{id}', [InsidentilController::class, 'update']);
Route::get('/v_insidentil/delete/{id}', [InsidentilController::class, 'delete']);
Route::get('/v_insidentil/detail/{id}', [InsidentilController::class, 'detail']);
Route::get('/v_insidentil/formkegiatan', [InsidentilController::class, 'formkegiatan']);
Route::get('/v_insidentil/formpenerimaan', [InsidentilController::class, 'formpenerimaan']);
Route::get('/v_insidentil/cetaklaporan/{tglawal}', [InsidentilController::class, 'cetaklaporanTanggal']);
Route::get('/v_insidentil/cetaklaporan/{tglawal}/{tglakhir}', [InsidentilController::class, 'cetaklaporanPertanggal']);
Route::get('/v_insidentil/cetakpenerimaan/{tglawal}', [InsidentilController::class, 'cetakpenerimaanTanggal']);
Route::get('/v_insidentil/cetakpenerimaan/{tglawal}/{tglakhir}', [InsidentilController::class, 'cetakpenerimaanPertanggal']);

Route::get('/v_rekomendasi/rekomendasi', [RekomendasiController::class, 'index'])->name('rekomendasi');
Route::get('/v_rekomendasi/add', [RekomendasiController::class, 'add']);
Route::post('/v_rekomendasi/insert', [RekomendasiController::class, 'insert']);
Route::get('/v_rekomendasi/edit/{id}', [RekomendasiController::class, 'edit']);
Route::post('/v_rekomendasi/update/{id}', [RekomendasiController::class, 'update']);
Route::get('/v_rekomendasi/delete/{id}', [RekomendasiController::class, 'delete']);
Route::get('/v_rekomendasi/detail/{id}', [RekomendasiController::class, 'detail']);
Route::get('/v_rekomendasi/formkegiatan', [RekomendasiController::class, 'formkegiatan']);
Route::get('/v_rekomendasi/formpenerimaan', [RekomendasiController::class, 'formpenerimaan']);
Route::get('/v_rekomendasi/cetaklaporan/{tglawal}', [RekomendasiController::class, 'cetaklaporanTanggal']);
Route::get('/v_rekomendasi/cetaklaporan/{tglawal}/{tglakhir}', [RekomendasiController::class, 'cetaklaporanPertanggal']);
Route::get('/v_rekomendasi/cetakpenerimaan/{tglawal}', [RekomendasiController::class, 'cetakpenerimaanTanggal']);
Route::get('/v_rekomendasi/cetakpenerimaan/{tglawal}/{tglakhir}', [RekomendasiController::class, 'cetakpenerimaanPertanggal']);

Route::get('/v_profile/profile', [UserController::class, 'index'])->name('profile');
Route::get('/v_profile/edit/{id}', [UserController::class, 'edit']);
Route::post('/v_profile/update/{id}', [UserController::class, 'update']);
Route::get('/v_profile/editpassword', [UserController::class, 'editpassword']);
Route::post('/v_profile/updatepassword', [UserController::class, 'updatepassword']);

Route::get('/v_target/target', [TargetController::class, 'index'])->name('target');
Route::get('/v_target/add', [TargetController::class, 'add']);
Route::post('/v_target/insert', [TargetController::class, 'insert']);
Route::get('/v_target/edit/{id}', [TargetController::class, 'edit']);
Route::post('/v_target/update/{id}', [TargetController::class, 'update']);
Route::get('/v_target/delete/{id}', [TargetController::class, 'delete']);

Route::get('/v_pad/pad', [PadController::class, 'index'])->name('pad');
Route::get('/v_pad/detail/{id}', [PadController::class, 'detail']);
Route::get('/v_pad/add', [PadController::class, 'add']);
Route::post('/v_pad/insert', [PadController::class, 'insert']);
Route::get('/v_pad/edit/{id}', [PadController::class, 'edit']);
Route::post('/v_pad/update/{id}', [PadController::class, 'update']);
Route::get('/v_pad/delete/{id}', [PadController::class, 'delete']);
Route::get('/v_pad/cetaklaporan/{id}', [PadController::class, 'cetaklaporan']);


Route::get('/v_bukubesar/bukubesar', [BukubesarController::class, 'index'])->name('bukubesar');
Route::get('/v_bukubesar/detail/{id}', [BukubesarController::class, 'detail']);
Route::get('/v_bukubesar/add', [BukubesarController::class, 'add']);
Route::post('/v_bukubesar/insert', [BukubesarController::class, 'insert']);
Route::get('/v_bukubesar/edit/{id}', [BukubesarController::class, 'edit']);
Route::post('/v_bukubesar/update/{id}', [BukubesarController::class, 'update']);
Route::get('/v_bukubesar/delete/{id}', [BukubesarController::class, 'delete']);
Route::get('/v_bukubesar/cetakharianpenerimaan/{id}', [BukubesarController::class, 'cetakharianpenerimaan']);
Route::get('/v_bukubesar/cetakbulananpenerimaan/{id}', [BukubesarController::class, 'cetakbulananpenerimaan']);


Route::group(['middleware' => 'admin'], function () {
    Route::get('/v_user/user', [UserController::class, 'u_index'])->name('user');
    Route::get('/v_user/add', [UserController::class, 'u_add']);
    Route::post('/v_user/insert', [UserController::class, 'u_insert']);
    Route::get('/v_user/detail/{id}', [UserController::class, 'u_detail']);
    Route::get('/v_user/delete/{id}', [UserController::class, 'u_delete']);
    Route::get('/v_user/edit/{id}', [UserController::class, 'u_edit']);
    Route::post('/v_user/update/{id}', [UserController::class, 'u_update']);
});
