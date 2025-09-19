<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\contactController;


/* Site Routes */
Route::post('/teste', [contactController::class, 'sendMail'])->name('sendMail');
Route::get('/contato', function(){
    return view('contato');
});
Route::redirect('/', 'site/home');

Route::get('site/home', [SiteController::class, 'home'])->name('site.home');
Route::get('site/contact', [SiteController::class, 'contact'])->name('site.contact');
Route::get('site/about', [SiteController::class, 'about'])->name('site.about');
/* Routas de Categorias */
Route::get('site/category', [SiteController::class, 'category'])->name('site.category');
Route::get('site/policy', [SiteController::class, 'policy'])->name('site.policy');
Route::get('site/society', [SiteController::class, 'society'])->name('site.society');
Route::get('site/economic', [SiteController::class, 'economic'])->name('site.economic');
Route::get('site/culture', [SiteController::class, 'culture'])->name('site.culture');
Route::get('site/tech', [SiteController::class, 'tech'])->name('site.tech');
Route::get('site/newsCategory', [SiteController::class, 'newsCategory'])->name('site.newsCategory');
Route::get('site/eventCategory', [SiteController::class, 'eventCategory'])->name('site.eventCategory');
Route::get('site/allNews', [SiteController::class, 'allNews'])->name('site.allNews');
/* Routas de Visualizações */
Route::get('site/eventView/{event}', [SiteController::class, 'eventView'])->name('site.eventView');
Route::get('site/newsView/{news}', [SiteController::class, 'newsView'])->name('site.newsView');
Route::get('site/policyView/{news}', [SiteController::class, 'policyView'])->name('site.policyView');
Route::get('site/publication', [SiteController::class, 'publication'])->name('site.publication');
Route::get('site/videos', [SiteController::class, 'videos'])->name('site.videos');
Route::get('site/galery', [SiteController::class, 'galery'])->name('site.galery');
