<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesIndexController;
use App\Http\Controllers\CasesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ServicesPageController; // Исправлено: servicesPageController -> ServicesPageController

// Главная страница
Route::get('/', [HomeController::class, 'index'])->name('home');

// Общие страницы (используем группировку для лучшей читаемости)
Route::group([], function () { // Можно использовать Route::prefix('/')->group, но так чище для корня
    Route::get('/cases', [CasesController::class, 'index'])->name('cases.index');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
    Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');
});

// Группа маршрутов для Услуг
Route::prefix('services')->group(function () {
    // Главная страница услуг
    Route::get('/', [ServicesIndexController::class, 'index'])->name('services.index');

    // Подстраницы услуг
    Route::get('/{page}', [ServicesPageController::class, 'show'])
        ->name('services.page')
        ->whereIn('page', ['content', 'aibots', 'mailmarket', 'castom']);
});
