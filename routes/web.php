<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/project-idea', [PageController::class, 'project'])->name('project-idea');
Route::get('/project', [PageController::class, 'project'])->name('project');

Route::get('/kalkulator', [PageController::class, 'kalkulator'])->name('kalkulator');

Route::get('/hitung/{angka1}/{angka2}/{operasi}', [PageController::class, 'hitung'])->name('hitung');

Route::get('/team', [TeamController::class, 'index'])->name('team.index');

Route::get('/team/{id}', [TeamController::class, 'show'])
    ->whereNumber('id')
    ->name('team.show');
