<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;




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

Route::get('/test',function(Request $request){
    return 'Authenticated';
});

Route::get('/studentlist',[StudentController::class,'studentlist']);

Route::post('/studentcreat',[StudentController::class,'studentcreatsubmit']);

Route::put('/studentEdit/{id}',[StudentController::class,'studentEditsubmit']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
