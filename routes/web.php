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
Route::get('/download-video/{unique_id}', [MainController::class, 'downloadVideo'])->name('download-video');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [MainController::class, 'dashboard'])->name('dashboard');
    Route::get('upload-video', [MainController::class, 'uploadVideo'])->name('upload-video');
    Route::get('logout', [MainController::class, 'logout'])->name('logout');
    Route::post('do_upload_video', [MainController::class, 'doUploadVideo'])->name('do_upload_video');
    Route::get('upload-audio', [MainController::class, 'uploadAudio'])->name('upload-audio');
    Route::post('do_upload_audio', [MainController::class, 'doUploadAudio'])->name('do_upload_audio');
    Route::get('all-uploads', [MainController::class, 'allUploads'])->name('all-uploads');
    Route::get('/edit/{unique_id}', [MainController::class, 'edit'])->name('edit');
    Route::get('/delete/{unique_id}', [MainController::class, 'delete'])->name('delete');
    Route::post('do_edit', [MainController::class, 'doEdit'])->name('do_edit');
    Route::get('upload-youtube', [MainController::class, 'uploadYoutube'])->name('upload-youtube');
    Route::post('do-upload-youtube', [MainController::class, 'doUploadYoutube'])->name('do-upload-youtube');
    Route::get('upload-utorrent', [MainController::class, 'uploadUtorrent'])->name('upload-utorrent');
    Route::post('do-upload-utorrent', [MainController::class, 'doUploadUtorrent'])->name('do-upload-utorrent');

});
