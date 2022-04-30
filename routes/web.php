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

Route::get('/api/v1/events', [App\Http\Controllers\API\EventController::class, 'index'])->name('index');;

Route::get('/api/v1/events/active-events', [App\Http\Controllers\API\EventController::class, 'active_events']);

Route::get('/api/v1/events/{event}/edit', [App\Http\Controllers\API\EventController::class, 'event_edit']);

Route::put('/api/v1/events/{event}', [App\Http\Controllers\API\EventController::class, 'event_update']);

Route::delete('/api/v1/events/{event}', [App\Http\Controllers\API\EventController::class, 'event_destroy']);

// Store event
Route::get('/api/v1/events/create ', [App\Http\Controllers\API\EventController::class, 'event_create']);
Route::post('/api/v1/events ', [App\Http\Controllers\API\EventController::class, 'event_store']);


Route::patch('/api/v1/events/{id}', [App\Http\Controllers\API\EventController::class, 'patch_events']);

Route::get('/api/v1/events/search ', [App\Http\Controllers\API\EventController::class, 'event_search']);
