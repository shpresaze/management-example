<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SalaryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource("companies", CompanyController::class)->only('index','show');

Route::apiResource("employees", EmployeeController::class)->only('index','show');

Route::apiResource("salaries", SalaryController::class)->only('index');

Route::get('/employeeAverageSalary/{id}', [EmployeeController::class, 'employeeAverageSalary']);

Route::get('/companyAverageSalary/{id}', [SalaryController::class, 'companyAverageSalary']);


