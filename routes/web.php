<?php

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
    return view('welcome');
});

Route::get('/api/v1/events', [App\Http\Controllers\API\EventController::class, 'index']);

Route::get('/api/v1/events/active-events', [App\Http\Controllers\API\EventController::class, 'active_events']);

Route::get('/api/v1/events/{id}', [App\Http\Controllers\API\EventController::class, 'events']);

Route::post('/api/v1/events ', [App\Http\Controllers\API\EventController::class, 'create_events']);

Route::put('/api/v1/events/{id}', [App\Http\Controllers\API\EventController::class, 'put_events']);

Route::patch('/api/v1/events/{id}', [App\Http\Controllers\API\EventController::class, 'patch_events']);

Route::delete('/api/v1/events/{id}', [App\Http\Controllers\API\EventController::class, 'delete_events']);
