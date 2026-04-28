<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;

// Rotas de Autenticação
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rota principal e Index
Route::get('/', function () { return redirect()->route('contacts.index'); });
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

// Rotas Protegidas (Vêm ANTES do curinga 'show')
Route::middleware('auth')->group(function () {
    Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
    Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
    Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');
    Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
});

// A rota de detalhes (curinga) fica por último
Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
