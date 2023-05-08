<?php

use App\Http\Controllers\SubCommitteeController;
use App\Http\Controllers\TechnicalCommitteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('web.index');
});
Route::get('/technical_committee_list', function () {
    return view('web.technical_committee_list');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Technical Committee
Route::resource('technical-committee', TechnicalCommitteController::class);
Route::get('/technical-committee/delete/{id}', [App\Http\Controllers\TechnicalCommitteController::class, 'destroy']);
//Sub Committee
Route::resource('sub-committee', SubCommitteeController::class);
Route::get('/sub-committee/delete/{id}', [App\Http\Controllers\SubCommitteeController::class, 'destroy']);
