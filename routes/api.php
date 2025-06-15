<?php

use App\Http\Controllers\WEB\DestinationController;
use App\Http\Controllers\WEB\EventController;
use App\Http\Controllers\WEB\PostController;
use App\Http\Controllers\WEB\ProjectController;
use App\Http\Controllers\WEB\SafariController;
use App\Http\Controllers\WEB\SafetyController;
use App\Http\Controllers\WEB\TeamController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

    Route::post('/project/update/desc/{id}', [ProjectController::class,'updateDesc'])->name('admin.project.update.desc');
    Route::post('/team/update/desc/{id}', [TeamController::class,'updateDesc'])->name('admin.team.update.desc');
    Route::post('/post/update/desc/{id}', [PostController::class,'updateDesc'])->name('admin.post.update.desc');
    Route::post('/event/update/desc/{id}', [EventController::class,'updateDesc'])->name('admin.event.update.desc');
    Route::post('/destination/update/desc/{id}', [DestinationController::class,'updateDesc'])->name('admin.destination.update.desc');
    Route::post('/safety/update/desc', [SafetyController::class,'updateDesc'])->name('admin.safety.update.desc');

//    Safri
    Route::post('/safari/update/desc/{id}', [SafariController::class,'updateDesc'])->name('admin.safari.update.desc');

