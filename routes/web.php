<?php

use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\ServicesController;
use App\Http\Controllers\Pages\CompanyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/services/cloud-computing', [ServicesController::class, 'cloud'])->name('services.cloud');
Route::get('/services/disaster-recovery', [ServicesController::class, 'disaster'])->name('services.disaster');
Route::get('/services/secure-access', [ServicesController::class, 'secure'])->name('services.secure');
Route::get('/services/telecom-services', [ServicesController::class, 'telecom'])->name('services.telecom');
Route::get('/services/business-consultancy', [ServicesController::class, 'consultancy'])->name('services.consultancy');
Route::get('/services/trading-solutions', [ServicesController::class, 'trading'])->name('services.trading');
Route::get('/services/acronis-security', [ServicesController::class, 'acronis'])->name('services.acronis');
Route::get('/company', [CompanyController::class, 'index'])->name('company');
