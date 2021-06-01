<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Factures;
use App\Http\Controllers\Factures2Controller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('factures', Factures2Controller::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//post - dodawanie danych
/*Route::get('/factures', function(){
$post = Factures::create([
    'number'=> 1, 
    'date'=>'10.12.2020', 
    'total'=>120]);
    return $post;
});
Route::get('/factures', [FacturesController::class, 'index']);
Route::post('/factures', [FacturesController::class, 'store']);
Route::put('/factures/update', [FacturesController::class, 'update']);
Route::delete('/factures/delete', [FacturesController::class, 'destroy']);
*/