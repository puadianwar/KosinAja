<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\PenitipanController;
use App\Http\Controllers\PackingController;
use App\Http\Controllers\AngkutController;


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

Route::get('home', function () {
   return view('home');
});

Route::get('about', function () {
    return view('about');
}); 

Route::get('price', function () {
    return view('price');
});

Route::get('blog', function () {
   return view('blog');
});

// Route::get('/', function () {
   // return view('download');
// }); 

Route::middleware(['guest'])->group(function () {
   Route::get('/', function () {
       return view('home');
   });

   Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
   Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');
});

Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
   Route::get('/admin/home', [LoginRegisterController::class, 'adminHome'])->name('admin.home');
   Route::get('/admin/history', [LoginRegisterController::class, 'adminHistory'])->name('admin.history');
   Route::get('/admin/penitipan', [LoginRegisterController::class, 'adminPenitipan'])->name('admin.penitipan');
   Route::get('/admin/pelanggan', [LoginRegisterController::class, 'adminPelanggan'])->name('admin.pelanggan');
});


//Penitipan 

    Route::get('/admin/tambah_penitipan', [PenitipanController::class, 'tambahPenitipan'])->name('admin.tambah_penitipan');
    Route::post('/admin/tambah_penitipan', [PenitipanController::class, 'store'])->name('admin.tambah_penitipan');
    Route::delete('/admin/penitipan/{id}', [PenitipanController::class, 'deletPenitipan'])->name('admin.delet_penitipan');
    // Tampilkan form edit
    Route::get('/admin/edit_penitipan/{id}', [PenitipanController::class, 'edit'])->name('admin.edit_penitipan');
    // Update data penitipan
    Route::put('/admin/update_penitipan/{id}', [PenitipanController::class, 'update'])->name('admin.update_penitipan');
    Route::get('/admin/penitipan/{id}/detail', [PenitipanController::class, 'show'])->name('admin.detail_penitipan');

// packing
   Route::get('/admin/packing', [LoginRegisterController::class, 'adminPacking'])->name('admin.packing');
   Route::get('/admin/tambah_packing', [LoginRegisterController::class, 'tambahPacking'])->name('admin.tambah_packing');
   Route::post('/admin/tambah_packing', [LoginRegisterController::class, 'storePacking']);
   Route::delete('/admin/packing/{id}', [PackingController::class, 'deletPacking'])->name('admin.delet_packing');
   Route::get('/admin/edit_packing/{id}', [PackingController::class, 'edit'])->name('admin.edit_packing');
   Route::put('/admin/update_packing/{id}', [PackingController::class, 'update'])->name('admin.update_packing');
   Route::get('/admin/packing/{id}/detail', [PackingController::class, 'show'])->name('admin.detail_packing');

// angkut
   Route::get('/admin/angkut', [LoginRegisterController::class, 'adminAngkut'])->name('admin.angkut');
   Route::get('/admin/tambah_angkut', [LoginRegisterController::class, 'tambahAngkut'])->name('admin.tambah_angkut');
   Route::post('/admin/tambah_angkut', [LoginRegisterController::class, 'storeAngkut']);
   Route::delete('/admin/angkut/{id}', [AngkutController::class, 'deletAngkut'])->name('admin.delet_angkut');
   Route::get('/admin/edit_angkut/{id}', [AngkutController::class, 'edit'])->name('admin.edit_angkut');
   Route::put('/admin/update_angkut/{id}', [AngkutController::class, 'update'])->name('admin.update_angkut');
   Route::get('/admin/angkut/{id}/detail', [AngkutController::class, 'show'])->name('admin.detail_angkut');


Route::group(['middleware' => ['auth', 'checklevel:user']], function () {
   Route::get('/user/home', [LoginRegisterController::class, 'userHome'])->name('user.home');
});

Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');
