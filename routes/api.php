<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NameController;

Route::get('/', function () {
    return view('index');
});
Route::prefix('/app/')->group(function () {
    Route::post('create_name', [NameController::class, 'store']);
    Route::post('retrieve_name', [NameController::class, 'retrieveAll']);

});
