<?php
use App\Http\Controllers\FacturesController;
use App\Http\Controllers\CustomersController;
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
    return view('index');
});
Route::get('/factures', [FacturesController::class, 'index'])->name('factures.index');
Route::get('/create', [FacturesController::class, 'create'])->name('factures.create');
Route::post('/factures/add', [FacturesController::class, 'store'])->name('factures.store');
Route::get('/factures/edit/{id}', [FacturesController::class, 'edit'])->name('factures.edit');
Route::put('/factures/editt/{id}', [FacturesController::class, 'update'])->name('factures.update');
Route::get('/factures/destroy/{id}', [FacturesController::class, 'destroy'])->name('factures.destroy');

Route::resource('klienci', CustomersController::class,['names'=>'customers']);
