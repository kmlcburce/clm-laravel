<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NameController;

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


Route::get('/', function () {
    return view('index');
});
Route::prefix('/app/')->group(function () {
    Route::post('create_name', [NameController::class, 'store']);
    Route::post('retrieve_name', [NameController::class, 'retrieveAll']);

});
