<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
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
    return view('welcome');
});

Route::get('employee', function () {
    return view('employee');
})->middleware(['auth'])->name('employee');

Route::resource('employee',EmployeeController::class);
Route::resource('department',DepartmentController::class);

require __DIR__.'/auth.php';
