<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicial');
})->name('inicial');

Route::get('/loja', function () {
    return view('loja');
})->name('loja');

Route::get('/loja-produto', function () {
    return view('produto');
})->name('lojaproduto');

Route::get('/cursos', function () {
    return view('cursos');
})->name('cursos');

Route::get('/cursos-tipo', function () {
    return view('cursostipo');
})->name('cursostipo');

Route::get('/curso-tipo-descricao', function () {
    return view('cursosdescricao');
})->name('cursosdescricao');

Route::get('/youtube', function () {
    return view('youtube');
})->name('youtube');

Route::get('/imagens-galeria', function () {
    return view('galeria');
})->name('galeria');

Route::get('/agenda-cultural', function () {
    return view('agendacultural');
})->name('agendacultural');

Route::get('/agenda-cultural-descricao', function () {
    return view('agendadescricao');
})->name('agendadescricao');

Route::get('/parcerias', function () {
    return view('parceiros');
})->name('parceiros');

Route::get('/sobre-casa-do-piano', function () {
    return view('sobre');
})->name('sobre');

Route::get('/servicos', function () {
    return view('servicos');
})->name('servicos');
