<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SejarahController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sejarah', [HomeController::class, 'sejarah'])->name('sejarah');
Route::get('jenis', [HomeController::class, 'jenis'])->name('jenis');
Route::get('manfaat', [HomeController::class, 'manfaat'])->name('manfaat');

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');    
    Route::get('/admin/sejarah', [AdminController::class, 'sejarah']);
    Route::get('/admin/update-sejarah', [AdminController::class, 'UpdateSejarah'])->name('UpdateSejarah');
    Route::put('/admin/store-sejarah/{id}', [AdminController::class, 'StoreSejarah'])->name('StoreSejarah');

    Route::get('/admin/jenis', [AdminController::class, 'jenis']);
    Route::get('/admin/update-jenis/{id}', [AdminController::class, 'UpdateJenis'])->name('UpdateJenis');
    Route::post('/admin/jenis', [AdminController::class, 'CreateJenis'])->name('CreateJenis');
    Route::put('/admin/store-jenis/{id}', [AdminController::class, 'StoreJenis'])->name('StoreJenis');
    Route::delete('/admin/jenis/{id}', [AdminController::class, 'DeleteJenis'])->name('DeleteJenis');

    Route::get('/admin/manfaat', [AdminController::class, 'manfaat']);
    Route::post('/admin/manfaat', [AdminController::class, 'CreateManfaat'])->name('CreateManfaat');
    Route::get('/admin/update-manfaat/{id}', [AdminController::class, 'UpdateManfaat'])->name('UpdateManfaat');
    Route::put('/admin/store-manfaat/{id}', [AdminController::class, 'StoreManfaat'])->name('StoreManfaat');
    Route::delete('/admin/manfaat/{id}', [AdminController::class, 'DeleteManfaat'])->name('DeleteManfaat');
});

require __DIR__.'/auth.php';
