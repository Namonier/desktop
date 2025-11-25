<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $url = 'https://www.youtube.com/feeds/videos.xml?channel_id=UCAwGovOjkUQSES_hwSYqQrQ';
    $xmlString = Http::get($url)->body();
    $feed = new \SimpleXMLElement($xmlString);
    //Get the first entry:
    $entries = $feed->entry;
    //dd($entries);
    //if (empty($entries)) return null;
    //Extract the video ID from the link:
    $id_youtube_video = (string) explode('=',$entries->link['href'])[1];
    //dd($link);
    return view('inicial', compact('id_youtube_video'));
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
    $servicos = \App\Models\Service::all()->toArray();  
    return view('servicos', compact('servicos'));
})->name('servicos');
