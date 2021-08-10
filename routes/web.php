<?php

use App\Http\Controllers\MembreController;
use Illuminate\Support\Facades\DB;
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

Route::delete('membre/wipe', function () {
    DB::table('membres')->delete();
    return redirect()->back();
});
Route::resource('membre', MembreController::class);
