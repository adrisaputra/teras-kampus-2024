<?php

use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MonographController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NovelController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProceedingController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\RelatedLinksController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SupportedController;
use App\Http\Controllers\TextbookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\WorkshopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'index']);
Route::get('/page-about', [WebController::class, 'about']);
Route::get('/page-publishing-process', [WebController::class, 'publishing_process']);
Route::get('/page-catalog-1', [WebController::class, 'catalog_1']);
Route::get('/page-catalog-2', [WebController::class, 'catalog_2']);
Route::get('/page-catalog-3', [WebController::class, 'catalog_3']);
Route::get('/page-catalog-4', [WebController::class, 'catalog_4']);
Route::get('/page-catalog-1/{textbook}', [WebController::class, 'catalog_1_detail']);
Route::get('/page-catalog-2/{monograph}', [WebController::class, 'catalog_2_detail']);
Route::get('/page-catalog-3/{reference}', [WebController::class, 'catalog_3_detail']);
Route::get('/page-catalog-4/{novel}', [WebController::class, 'catalog_4_detail']);
Route::get('/page-journal', [WebController::class, 'journal']);
Route::get('/page-journal-detail/{journal}', [WebController::class, 'journal_detail']);
Route::get('/page-proceeding', [WebController::class, 'proceeding']);
Route::get('/page-proceeding-detail/{proceeding}', [WebController::class, 'proceeding_detail']);
Route::get('/page-conference', [WebController::class, 'conference']);
Route::get('/page-workshop', [WebController::class, 'workshop']);
Route::get('/page-author-and-affiliation', [WebController::class, 'author_and_affiliation']);
Route::get('/page-term-and-condition', [WebController::class, 'term_and_condition']);
Route::get('/page-contact', [WebController::class, 'contact']);


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware(['operator'])->group(function () {
    
    Route::get('/dashboard', [HomeController::class, 'index']);
    
    ## Profiles
    Route::get('/about_us', [PageController::class, 'index']);
    Route::get('/publishing_process', [PageController::class, 'index']);
    Route::get('/term_and_condition', [PageController::class, 'index']);

    ## Slider
    Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
    Route::get('/slider/list', [SliderController::class, 'get_slider_index'])->name('slider.list');
    Route::post('/slider/store', [SliderController::class, 'store']);
    Route::post('/slider/validation/{action}', [SliderController::class, 'validation']);
    Route::get('/slider/edit/{slider}', [SliderController::class, 'edit']);
    Route::put('/slider/edit/{slider}', [SliderController::class, 'update']);
    Route::get('/slider/delete/{slider}',[SliderController::class, 'delete']);

    ## News
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/list', [NewsController::class, 'get_news_index'])->name('news.list');
    Route::post('news/upload_image',[NewsController::class, 'upload_image'])->name('upload_news');
    Route::post('/news/store', [NewsController::class, 'store']);
    Route::post('/news/validation/{action}', [NewsController::class, 'validation']);
    Route::get('/news/edit/{news}', [NewsController::class, 'edit']);
    Route::put('/news/edit/{news}', [NewsController::class, 'update']);
    Route::get('/news/delete/{news}',[NewsController::class, 'delete']);

    ## Journal
    Route::get('/journal', [JournalController::class, 'index'])->name('journal.index');
    Route::get('/journal/list', [JournalController::class, 'get_journal_index'])->name('journal.list');
    Route::post('journal/upload_image',[JournalController::class, 'upload_image'])->name('upload_journal');
    Route::post('/journal/store', [JournalController::class, 'store']);
    Route::post('/journal/validation/{action}', [JournalController::class, 'validation']);
    Route::get('/journal/edit/{journal}', [JournalController::class, 'edit']);
    Route::put('/journal/edit/{journal}', [JournalController::class, 'update']);
    Route::get('/journal/delete/{journal}',[JournalController::class, 'delete']);

    ## Proceeding
    Route::get('/proceeding', [ProceedingController::class, 'index'])->name('proceeding.index');
    Route::get('/proceeding/list', [ProceedingController::class, 'get_proceeding_index'])->name('proceeding.list');
    Route::post('proceeding/upload_image',[ProceedingController::class, 'upload_image'])->name('upload_proceeding');
    Route::post('/proceeding/store', [ProceedingController::class, 'store']);
    Route::post('/proceeding/validation/{action}', [ProceedingController::class, 'validation']);
    Route::get('/proceeding/edit/{proceeding}', [ProceedingController::class, 'edit']);
    Route::put('/proceeding/edit/{proceeding}', [ProceedingController::class, 'update']);
    Route::get('/proceeding/delete/{proceeding}',[ProceedingController::class, 'delete']);

    ## Textbook
    Route::get('/textbook', [TextbookController::class, 'index'])->name('textbook.index');
    Route::get('/textbook/list', [TextbookController::class, 'get_textbook_index'])->name('textbook.list');
    Route::post('textbook/upload_image',[TextbookController::class, 'upload_image'])->name('upload_textbook');
    Route::post('/textbook/store', [TextbookController::class, 'store']);
    Route::post('/textbook/validation/{action}', [TextbookController::class, 'validation']);
    Route::get('/textbook/edit/{textbook}', [TextbookController::class, 'edit']);
    Route::put('/textbook/edit/{textbook}', [TextbookController::class, 'update']);
    Route::get('/textbook/delete/{textbook}',[TextbookController::class, 'delete']);

    ## Monograph
    Route::get('/monograph', [MonographController::class, 'index'])->name('monograph.index');
    Route::get('/monograph/list', [MonographController::class, 'get_monograph_index'])->name('monograph.list');
    Route::post('monograph/upload_image',[MonographController::class, 'upload_image'])->name('upload_monograph');
    Route::post('/monograph/store', [MonographController::class, 'store']);
    Route::post('/monograph/validation/{action}', [MonographController::class, 'validation']);
    Route::get('/monograph/edit/{monograph}', [MonographController::class, 'edit']);
    Route::put('/monograph/edit/{monograph}', [MonographController::class, 'update']);
    Route::get('/monograph/delete/{monograph}',[MonographController::class, 'delete']);

    ## Reference
    Route::get('/reference', [ReferenceController::class, 'index'])->name('reference.index');
    Route::get('/reference/list', [ReferenceController::class, 'get_reference_index'])->name('reference.list');
    Route::post('reference/upload_image',[ReferenceController::class, 'upload_image'])->name('upload_reference');
    Route::post('/reference/store', [ReferenceController::class, 'store']);
    Route::post('/reference/validation/{action}', [ReferenceController::class, 'validation']);
    Route::get('/reference/edit/{reference}', [ReferenceController::class, 'edit']);
    Route::put('/reference/edit/{reference}', [ReferenceController::class, 'update']);
    Route::get('/reference/delete/{reference}',[ReferenceController::class, 'delete']);

    ## Novel
    Route::get('/novel', [NovelController::class, 'index'])->name('novel.index');
    Route::get('/novel/list', [NovelController::class, 'get_novel_index'])->name('novel.list');
    Route::post('novel/upload_image',[NovelController::class, 'upload_image'])->name('upload_novel');
    Route::post('/novel/store', [NovelController::class, 'store']);
    Route::post('/novel/validation/{action}', [NovelController::class, 'validation']);
    Route::get('/novel/edit/{novel}', [NovelController::class, 'edit']);
    Route::put('/novel/edit/{novel}', [NovelController::class, 'update']);
    Route::get('/novel/delete/{novel}',[NovelController::class, 'delete']);

    ## Conference
    Route::get('/conference', [ConferenceController::class, 'index'])->name('conference.index');
    Route::get('/conference/list', [ConferenceController::class, 'get_conference_index'])->name('conference.list');
    Route::post('/conference/store', [ConferenceController::class, 'store']);
    Route::post('/conference/validation/{action}', [ConferenceController::class, 'validation']);
    Route::get('/conference/edit/{conference}', [ConferenceController::class, 'edit']);
    Route::put('/conference/edit/{conference}', [ConferenceController::class, 'update']);
    Route::get('/conference/delete/{conference}',[ConferenceController::class, 'delete']);

    ## Workshop
    Route::get('/workshop', [WorkshopController::class, 'index'])->name('workshop.index');
    Route::get('/workshop/list', [WorkshopController::class, 'get_workshop_index'])->name('workshop.list');
    Route::post('/workshop/store', [WorkshopController::class, 'store']);
    Route::post('/workshop/validation/{action}', [WorkshopController::class, 'validation']);
    Route::get('/workshop/edit/{workshop}', [WorkshopController::class, 'edit']);
    Route::put('/workshop/edit/{workshop}', [WorkshopController::class, 'update']);
    Route::get('/workshop/delete/{workshop}',[WorkshopController::class, 'delete']);

    ## Supported
    Route::get('/supported', [SupportedController::class, 'index'])->name('supported.index');
    Route::get('/supported/list', [SupportedController::class, 'get_supported_index'])->name('supported.list');
    Route::post('/supported/store', [SupportedController::class, 'store']);
    Route::post('/supported/validation/{action}', [SupportedController::class, 'validation']);
    Route::get('/supported/edit/{supported}', [SupportedController::class, 'edit']);
    Route::put('/supported/edit/{supported}', [SupportedController::class, 'update']);
    Route::get('/supported/delete/{supported}',[SupportedController::class, 'delete']);

    ## Related Link
    Route::get('/related_link', [RelatedLinksController::class, 'index'])->name('related_link.index');
    Route::get('/related_link/list', [RelatedLinksController::class, 'get_related_link_index'])->name('related_link.list');
    Route::post('/related_link/store', [RelatedLinksController::class, 'store']);
    Route::post('/related_link/validation/{action}', [RelatedLinksController::class, 'validation']);
    Route::get('/related_link/edit/{related_link}', [RelatedLinksController::class, 'edit']);
    Route::put('/related_link/edit/{related_link}', [RelatedLinksController::class, 'update']);
    Route::get('/related_link/delete/{related_link}',[RelatedLinksController::class, 'delete']);

    ## Edit Profile
    Route::get('/edit_profil/{user}',[UserController::class, 'edit_profil']);
    Route::post('/edit_profil/validation/{action}', [UserController::class, 'validation_profile']);
    Route::put('/edit_profil/{user}',[UserController::class, 'update_profil']);

});



Route::middleware(['administrator'])->group(function () {

    ## User
    Route::get('/user', [UserController::class, 'index'])->name('users.index');
    Route::get('/user/list', [UserController::class, 'get_user_index'])->name('users.list');
    Route::post('/user/store', [UserController::class, 'store']);
    Route::post('/user/validation/{action}', [UserController::class, 'validation']);
    Route::get('/user/edit/{user}', [UserController::class, 'edit']);
    Route::put('/user/edit/{user}', [UserController::class, 'update']);
    Route::get('/user/delete/{user}',[UserController::class, 'delete']);
    

    ## Setting
    Route::get('/setting', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/setting/validation', [SettingController::class, 'validation']);
    Route::put('/setting/edit/{setting}', [SettingController::class, 'update']);

    ## Log
    Route::get('/log', [LogController::class, 'index'])->name('logs.index');
    Route::get('/log/list', [LogController::class, 'get_log_index'])->name('logs.list');


});
