<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\TasksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();


});

 //Aqui tenemos las relaciones de el usuario conla tarea y y la compañia con la tarea

    //creation users
    Route::get('/users/index',[UsersController::class, 'index']); // get list resources
    Route::post('/users/create',[UsersController::class, 'store']); //create resource


    //creation companies
    Route::get('/companies/index',[CompaniesController::class, 'index']); // get list resources
    Route::post('/companies/create',[CompaniesController::class, 'store']); // create resource

    //creation tasks
    Route::get('/tasks/index/{id}',[TasksController::class, 'index']); // get list resources
    Route::post('/tasks/create',[TasksController::class, 'store']);



