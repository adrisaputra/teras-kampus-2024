<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProceedingController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'index']);


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware(['operator'])->group(function () {
    
    Route::get('/dashboard', [HomeController::class, 'index']);
    
    ## Slider
    Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
    Route::get('/slider/list', [SliderController::class, 'get_slider_index'])->name('slider.list');
    Route::post('/slider/store', [SliderController::class, 'store']);
    Route::post('/slider/validate/{action}', [SliderController::class, 'validate']);
    Route::get('/slider/edit/{slider}', [SliderController::class, 'edit']);
    Route::put('/slider/edit/{slider}', [SliderController::class, 'update']);
    Route::get('/slider/delete/{slider}',[SliderController::class, 'delete']);

    ## News
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/list', [NewsController::class, 'get_news_index'])->name('news.list');
    Route::post('news/upload_image',[NewsController::class, 'upload_image'])->name('upload_news');
    Route::post('/news/store', [NewsController::class, 'store']);
    Route::post('/news/validate/{action}', [NewsController::class, 'validate']);
    Route::get('/news/edit/{news}', [NewsController::class, 'edit']);
    Route::put('/news/edit/{news}', [NewsController::class, 'update']);
    Route::get('/news/delete/{news}',[NewsController::class, 'delete']);

    ## Journal
    Route::get('/journal', [JournalController::class, 'index'])->name('journal.index');
    Route::get('/journal/list', [JournalController::class, 'get_journal_index'])->name('journal.list');
    Route::post('journal/upload_image',[JournalController::class, 'upload_image'])->name('upload_journal');
    Route::post('/journal/store', [JournalController::class, 'store']);
    Route::post('/journal/validate/{action}', [JournalController::class, 'validate']);
    Route::get('/journal/edit/{journal}', [JournalController::class, 'edit']);
    Route::put('/journal/edit/{journal}', [JournalController::class, 'update']);
    Route::get('/journal/delete/{journal}',[JournalController::class, 'delete']);

    ## Proceeding
    Route::get('/proceeding', [ProceedingController::class, 'index'])->name('proceeding.index');
    Route::get('/proceeding/list', [ProceedingController::class, 'get_proceeding_index'])->name('proceeding.list');
    Route::post('proceeding/upload_image',[ProceedingController::class, 'upload_image'])->name('upload_proceeding');
    Route::post('/proceeding/store', [ProceedingController::class, 'store']);
    Route::post('/proceeding/validate/{action}', [ProceedingController::class, 'validate']);
    Route::get('/proceeding/edit/{proceeding}', [ProceedingController::class, 'edit']);
    Route::put('/proceeding/edit/{proceeding}', [ProceedingController::class, 'update']);
    Route::get('/proceeding/delete/{proceeding}',[ProceedingController::class, 'delete']);

    ## Edit Profile
    Route::get('/edit_profil/{user}',[UserController::class, 'edit_profil']);
    Route::post('/edit_profil/validate/{action}', [UserController::class, 'validate_profile']);
    Route::put('/edit_profil/{user}',[UserController::class, 'update_profil']);

});



Route::middleware(['administrator'])->group(function () {

    ## User
    Route::get('/user', [UserController::class, 'index'])->name('users.index');
    Route::get('/user/list', [UserController::class, 'get_user_index'])->name('users.list');
    Route::post('/user/store', [UserController::class, 'store']);
    Route::post('/user/validate/{action}', [UserController::class, 'validate']);
    Route::get('/user/edit/{user}', [UserController::class, 'edit']);
    Route::put('/user/edit/{user}', [UserController::class, 'update']);
    Route::get('/user/delete/{user}',[UserController::class, 'delete']);
    

    ## Setting
    Route::get('/setting', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/setting/validate', [SettingController::class, 'validate']);
    Route::put('/setting/edit/{setting}', [SettingController::class, 'update']);

    ## Log
    Route::get('/log', [LogController::class, 'index'])->name('logs.index');
    Route::get('/log/list', [LogController::class, 'get_log_index'])->name('logs.list');


});
