<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

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
    return view('crud.companies');
});

//Route::resource('customers','CustomerController');
//Route::resource('customers', CustomerController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('crud.companies');
})->name('home');

Route::get('ajax-crud-datatable', [CompanyController::class, 'index']);
Route::post('store-company', [CompanyController::class, 'store']);
Route::post('edit-company', [CompanyController::class, 'edit']);
Route::post('delete-company', [CompanyController::class, 'destroy']);
