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
Route::get('/download/{unique_id}', [MainController::class, 'downloadVideo'])->name('download');
Route::get('/download', [MainController::class, 'getDownload'])->name('download');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [MainController::class, 'dashboard'])->name('dashboard');
    Route::get('upload-video', [MainController::class, 'uploadVideo'])->name('upload-video');
    Route::get('all-video', [MainController::class, 'allVideo'])->name('all-video');
    Route::get('all-youtube', [MainController::class, 'allYoutube'])->name('all-youtube');
    Route::get('all-utorrent', [MainController::class, 'allUtorrent'])->name('all-utorrent');
    Route::get('all-audio', [MainController::class, 'allAudio'])->name('all-audio');
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
    Route::get('create-admin', [MainController::class, 'createAdmin'])->name('create-admin');
    Route::get('profile', [MainController::class, 'profile'])->name('profile');
    Route::get('page-settings', [MainController::class, 'pageSettings'])->name('page-settings');
    Route::post('do_create_admin', [MainController::class, 'doCreateAdmin'])->name('do_create_admin');
    Route::post('do_edit_profile', [MainController::class, 'doEditProfile'])->name('do_edit_profile');
    Route::post('change_password', [MainController::class, 'changePassword'])->name('change_password');
    Route::post('add_socials', [MainController::class, 'addSocials'])->name('add_socials');
    Route::post('uploader_note', [MainController::class, 'uploaderNote'])->name('uploader_note');
    Route::post('custom_logo', [MainController::class, 'customLogo'])->name('custom_logo');
    Route::post('footer_upload', [MainController::class, 'footerUpload'])->name('footer_upload');
});
