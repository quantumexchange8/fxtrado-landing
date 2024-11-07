<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/submitEmail', [SubscriptionController::class, 'submitEmail'])->name('submitEmail');

Route::get('/switch-language/{lang}', [LanguageController::class, 'switchLanguage'])->name('switch.language');