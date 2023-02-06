<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [HomeController::class, 'home']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/business/{aadaxaxda}', [HomeController::class, 'business']);

Route::get('/service/{vjhca}', [HomeController::class, 'service']);

// employee retlated routes
Route::get('create-employee', [EmployeeController::class, 'create']);

Route::post('/store-employee', [EmployeeController::class, 'store']);

Route::get('employees', [EmployeeController::class, 'all']);

Route::get('/edit-employee/{id}', [EmployeeController::class, 'edit']);

Route::post('/update-employee/{id}', [EmployeeController::class, 'update']);

Route::get('delete-employee/{id}', [EmployeeController::class, 'delete']);

Route::get('admin/dashboard', [LayoutController::class, 'dashboard']);

Route::get('admin/form', [LayoutController::class, 'forms']);

Route::get('admin/tables', [LayoutController::class, 'tables']);

Route::get('admin/register',[AuthController::class, 'register']);
Route::post('admin/create-user',[AuthController::class, 'createUser']);
Route::get('admin/login',[AuthController::class, 'login']);
Route::post('admin/user-login',[AuthController::class, 'userLogin']);