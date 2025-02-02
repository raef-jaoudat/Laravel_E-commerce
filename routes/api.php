<?php
use App\Http\Controllers\Api\ApiWebsiteController;
use App\Http\Controllers\Api\RegisterApiController;
use App\Http\Controllers\Api\LoginApiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/',function ()
{
return 1;

}

);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/home', [ApiWebsiteController::class, 'index']);
    Route::post('/example', [ApiWebsiteController::class, 'store']);
    Route::get('/example/{id}', [ApiWebsiteController::class, 'show']);
    Route::put('/example/{id}', [ApiWebsiteController::class, 'update']);
    Route::delete('/example/{id}', [ApiWebsiteController::class, 'destroy']);
});

Route::post('/register', [RegisterApiController::class, 'register']);
Route::post('/login', [LoginApiController::class, 'login']);
