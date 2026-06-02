<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CollectionController;

// Páginas Institucionais e Educativas
Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/sobre-nos', [SiteController::class, 'about'])->name('about');
Route::get('/o-que-reciclamos', [SiteController::class, 'materials'])->name('materials');

Route::get('/acondicionamento', [SiteController::class, 'acondicionamento'])->name('acondicionamento');
Route::get('/transportes', [SiteController::class, 'transportes'])->name('transportes');
Route::get('/servicos', [SiteController::class, 'servicos'])->name('servicos');

// Fluxo de Agendamento de Coleta
Route::get('/agendar-coleta', [CollectionController::class, 'create'])->name('collection.create');
Route::post('/agendar-coleta', [CollectionController::class, 'store'])->name('collection.store');