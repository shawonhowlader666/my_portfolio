<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\WebContactController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\SitemapController;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/projects/{slug}', [PortfolioController::class, 'show'])->name('projects.show');

// Protected Routes with Rate Limiting
Route::post('/contact', [WebContactController::class, 'sendEmail'])->name('contact.send')->middleware('throttle:5,1');
Route::post('/chat', [ChatbotController::class, 'chat'])->name('chat')->middleware('throttle:10,1');
Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe')->middleware('throttle:3,1');
Route::get('/sitemap.xml', [SitemapController::class, 'index']);

// Legal Pages
Route::view('/terms', 'pages.terms')->name('terms');
Route::view('/privacy', 'pages.privacy')->name('privacy');
