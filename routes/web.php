<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});
Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/quemsomos', function () {
    return view('quemsomos');
});

// Rota para exibir o formulário
Route::get('/contato', [ContactController::class, 'showForm'])->name('contact.form');

// Rota para processar o formulário
Route::post('/contato', [ContactController::class, 'store'])->name('contact.store');
