<?php

use Illuminate\Support\Facades\Route;
/* use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\contactController; */
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\NewsController;
use App\Http\Controllers\Site\PublicationController;
use App\Http\Controllers\Site\VideoController;
use App\Http\Controllers\Site\GaleryController;

/* home route */
Route::redirect('/', 'site/home');
Route::get('site/home', [HomeController::class, 'home'])->name('site.home');
/* events route */
Route::get('site/publication', [PublicationController::class, 'publication'])->name('site.publication');
/* videos route */
Route::get('site/videos', [VideoController::class, 'videos'])->name('site.videos');
/* galery route */
Route::get('site/galery', [GaleryController::class, 'galery'])->name('site.galery');
/* news details route */
Route::get('site/newsDetails/{news}', [NewsController::class, 'details'])->name('site.news.details');
/* news list route */
Route::get('site/newsList/{category}', [NewsController::class, 'list'])->name('site.news.list');

/* Rotas Descartadas */
/* Site Routes */
/* Route::post('/teste', [contactController::class, 'sendMail'])->name('sendMail');
Route::get('/contato', function(){
    return view('contato');
}); */
/* Route::get('site/newsCategory', [SiteController::class, 'newsCategory'])->name('site.newsCategory'); */
/* Route::get('site/category', [SiteController::class, 'category'])->name('site.category'); */
/* Route::get('site/tech', [SiteController::class, 'tech'])->name('site.tech'); */
/* Route::get('site/contact', [SiteController::class, 'contact'])->name('site.contact'); */
/* Route::get('site/about', [SiteController::class, 'about'])->name('site.about'); */
/* Routas de Categorias */
/* Route::get('site/policy', [SiteController::class, 'policy'])->name('site.policy');
Route::get('site/society', [SiteController::class, 'society'])->name('site.society');
Route::get('site/economic', [SiteController::class, 'economic'])->name('site.economic');
Route::get('site/culture', [SiteController::class, 'culture'])->name('site.culture'); */
/* Route::get('site/eventCategory', [SiteController::class, 'eventCategory'])->name('site.eventCategory'); */
/* Route::get('site/allNews', [SiteController::class, 'allNews'])->name('site.allNews'); */
/* Routas de Visualizações */
/* Route::get('site/eventView/{event}', [SiteController::class, 'eventView'])->name('site.eventView'); */
/* Route::get('site/newsView/{news}', [SiteController::class, 'newsView'])->name('site.newsView'); */
/* Route::get('site/policyView/{news}', [SiteController::class, 'policyView'])->name('site.policyView'); */