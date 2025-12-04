<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Grade;
use App\Http\Controllers\api\IntegrationController;

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
    return view('welcome');
});



Route::get('/api/students', [IntegrationController::class, 'index']);
Route::get('/api/students/{id}/grades', [IntegrationController::class, 'show']);
Route::get('/api/system/message', [IntegrationController::class, 'message']);
Route::get('/api/secure/students', function () {
    return "Welcome, Admin!";
})->middleware('checkrole');