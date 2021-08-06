<?php

use App\Http\Controllers\MainController;
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
})->name('welcome');

Route::post('do-login', [MainController::class, 'doLogin'])->name('do-login');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [MainController::class, 'dashboard'])->name('dashboard');
    Route::get('upload-video', [MainController::class, 'uploadVideo'])->name('upload-video');
    Route::get('logout', [MainController::class, 'logout'])->name('logout');
    Route::post('do_upload_video', [MainController::class, 'doUploadVideo'])->name('do_upload_video');
    Route::get('upload-audio', [MainController::class, 'uploadAudio'])->name('upload-audio');

});
