<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ChatbotController;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/projects/{slug}', [PortfolioController::class, 'show'])->name('projects.show');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');
Route::post('/chat', [ChatbotController::class, 'chat'])->name('chat');
Route::post('/subscribe', [\App\Http\Controllers\SubscriberController::class, 'store'])->name('subscribe');
Route::get('/sitemap.xml', [\App\Http\Controllers\SitemapController::class, 'index']);
