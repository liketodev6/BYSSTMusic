<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

//Route::group([
//    'prefix' => 'admin',
////    'as' => 'admin.',
////    'namespace' => 'Admin',
//    'middleware' => ['auth','admin']
//], function () {
//    Route::get('/', function () {
//        return view('admin.auth.login');
//    });
    Route::get('/home', [App\Http\Controllers\DashboardController::class, 'homeIndex'])->middleware('auth');
    Route::get('/music', [App\Http\Controllers\MusicMenuController::class, 'musicIndex'])->name('music')->middleware('auth');
    Route::get('/music-royality', [App\Http\Controllers\MusicMenuController::class, 'getPageRoyality'])->name('musicRoyality');
    Route::get('/upload-now', [App\Http\Controllers\MusicMenuController::class, 'uploadNow'])->name('uploadNow')->middleware('auth');
    Route::get('/ringbacktone', [App\Http\Controllers\MusicController::class, 'indexRingbacktone'])->name('ringbacktone')->middleware('auth');
    Route::get('/youtube-content', [App\Http\Controllers\MusicController::class, 'indexYoutube'])->name('youtubecontent')->middleware('auth');
    Route::get('/distribute-audio', [App\Http\Controllers\MusicController::class, 'distributeAudio'])->name('distribute.audio')->middleware('auth');
    Route::post('/upload-song', [App\Http\Controllers\MusicController::class, 'uploadSong'])->name('upload.song')->middleware('auth');
    Route::post('/add-ringbacktone', [App\Http\Controllers\MusicController::class, 'uploadRingbacktone'])->name('uploadRingbacktone')->middleware('auth');
    Route::post('/upload-youtube-content', [App\Http\Controllers\MusicController::class, 'uploadYoutubeContent'])->name('uploadYoutubeContente')->middleware('auth');
//    Route::get('/music-list', [App\Http\Controllers\HomeController::class, 'getPageMusicList'])->name('music.list');
//    Route::get('/users', [App\Http\Controllers\HomeController::class, 'getPageUsersList'])->name('users');
//    Route::get('/revenue', [App\Http\Controllers\HomeController::class, 'getPageRevenueList'])->name('revenue');
//    Route::get('/withdraw-request', [App\Http\Controllers\HomeController::class, 'getPageWithdrawRequest'])->name('withdraw.request');
//    Route::get('/transfer-list', [App\Http\Controllers\HomeController::class, 'getPageTransferList'])->name('transfer.list');
//
//    Route::post('/add-new-user', [AuthController::class, 'postRegistration'])->name('add.new.user');
//});



Route::middleware(['auth', 'admin'])->group(function () {
//    Route::get('/admin', function () {return view('admin.dashboard');})->name('dashboard');
        Route::get('/admin', [App\Http\Controllers\HomeController::class, 'getPageMusicList'])->name('music.list');
        Route::get('/content-id', [App\Http\Controllers\HomeController::class, 'getContentId'])->name('content.id');
//    Route::get('/music-list', [App\Http\Controllers\HomeController::class, 'getPageMusicList'])->name('music.list');
    Route::get('/royality', [App\Http\Controllers\HomeController::class, 'getPageRoyality'])->name('royality');
    Route::get('/users', [App\Http\Controllers\HomeController::class, 'getPageUsersList'])->name('users');
    Route::get('/album-atwork/{song_id}/{which}', [App\Http\Controllers\HomeController::class, 'albumAtwork'])->name('album.atwork');
    Route::delete('/delete-song', [App\Http\Controllers\HomeController::class, 'deleteSong'])->name('delete.song');
    Route::delete('/delete-content-id', [App\Http\Controllers\HomeController::class, 'deleteContentId'])->name('delete.content.id');
    Route::post('/approve-song', [App\Http\Controllers\HomeController::class, 'approveSong'])->name('approve.song');
    Route::post('/approve-content-id', [App\Http\Controllers\HomeController::class, 'approveContentId'])->name('approve.content.id');
//    Route::get('/revenue', [App\Http\Controllers\HomeController::class, 'getPageRevenueList'])->name('revenue');
//    Route::get('/withdraw-request', [App\Http\Controllers\HomeController::class, 'getPageWithdrawRequest'])->name('withdraw.request');
//    Route::get('/transfer-list', [App\Http\Controllers\HomeController::class, 'getPageTransferList'])->name('transfer.list')
    Route::post('/add-royality', [App\Http\Controllers\HomeController::class, 'uploadContent'])->name('addRoyality');
    Route::get('/complete-songs', [App\Http\Controllers\HomeController::class, 'completeSongs'])->name('complete.songs');
    Route::get('/track-download/{id}', [App\Http\Controllers\HomeController::class, 'trackDownload'])->name('track.download');
    Route::get('/content-id-download/{id}', [App\Http\Controllers\HomeController::class, 'contentIdDownload'])->name('content.id.download');
    Route::post('/add-smart-link', [App\Http\Controllers\HomeController::class, 'addSmartLink'])->name('add.smart.link');
    Route::post('/add-smart-link-content-id', [App\Http\Controllers\HomeController::class, 'addsmartlinkcontentId'])->name('add.smart.link.content.id');
});

