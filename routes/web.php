<?php

use Illuminate\Support\Facades\Route;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\GalleryImage;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;



Route::get('/', function () {
    $url = 'https://www.youtube.com/feeds/videos.xml?channel_id=UCAwGovOjkUQSES_hwSYqQrQ';
    $xmlString = Http::get($url)->body();
    $feed = new \SimpleXMLElement($xmlString);
    $entries = $feed->entry;
    $id_youtube_video = (string) explode('=',$entries->link['href'])[1];
    $ultimos_produtos = \App\Models\Product::latest()
    ->take(2)
    ->whereHas('images', function($query) {
        $query->where('is_home', 1);
    })
    ->with(['images' => function($query) {
        $query->where('is_home', 1);
    }])
    ->get();
    return view('inicial', compact('id_youtube_video', 'ultimos_produtos'));
})->name('inicial');

Route::get('/loja', function () {
    $itens_imagens = \App\Models\ProductImage::all()->toArray(); 
    $itens = \App\Models\Product::all()->toArray(); 
    return view('loja', compact('itens', 'itens_imagens'));
})->name('loja');

Route::get('/loja-produto/{id}', function ($id) {
    $itens = Product::where('id_product', $id)->get()->toArray();
    $itens_imagens = ProductImage::where('id_product', $id)->get()->toArray();
    return view('produto', compact('itens', 'itens_imagens'));
})->name('lojaproduto');

Route::get('/cursos', function () {
    $cursos = \App\Models\Category::all()->toArray(); 
    return view('cursos', compact('cursos'));
})->name('cursos');

Route::get('/cursos-tipo/{id}', function ($id) {
    $curso_tipos = Course::where('id_categories', $id)->get()->toArray();
    return view('cursostipo', compact('curso_tipos'));
})->name('cursostipo');

Route::get('/curso-tipo-descricao/{id}', function ($id) {
    $categoria = \App\Models\Category::all()->toArray(); 
    $curso = Course::with(['teachers', 'category'])
                   ->where('id_courses', $id)
                   ->first();
    return view('cursosdescricao', compact('curso', 'categoria'));
})->name('cursosdescricao');

Route::get('/galeria', function () {
    $imagensGerais = GalleryImage::whereNull('id_event')->get();
    $imagensEventos = GalleryImage::whereNotNull('id_event')->get();
    return view('galeria', compact('imagensGerais', 'imagensEventos'));
})->name('galeria');

//Rota para o (Menu)
Route::get('/agenda-cultural', function (Request $request) {
    $query = Event::query();
    if ($request->filled('mesAno')) {
        $data = $request->input('mesAno');
        $ano = substr($data, 0, 4); // Pega os 4 primeiros dígitos
        $mes = substr($data, 5, 2); // Pega os 2 dígitos do mês
        $query->whereYear('event_datetime', $ano)
              ->whereMonth('event_datetime', $mes);
    }
    $eventos = $query->orderBy('event_datetime', 'asc')->get();
    return view('agendacultural', compact('eventos'));
})->name('agendacultural.menu');

Route::get('/agenda-cultural/{id}', function ($id) {
    $eventos = Event::with('galleryImages')->findOrFail($id);
    return view('agendacultural', compact('evento'));
})->name('agendacultural');

Route::get('/agenda-cultural-descricao', function () {
    $eventos = \App\Models\Event::all()->toArray();
    return view('agendadescricao', compact('eventos'));
})->name('agendadescricao');

Route::get('/parcerias', function () {
    $parceiros = \App\Models\Partner::all()->toArray(); 
    return view('parceiros', compact('parceiros'));
})->name('parceiros');

Route::get('/sobre-casa-do-piano', function () {
    $sobre = \App\Models\Sobre::all()->toArray()[0]['texto']; 
    return view('sobre', compact('sobre'));
})->name('sobre');

Route::get('/servicos', function () {
    $servicos = \App\Models\Service::all()->toArray();  
    return view('servicos', compact('servicos'));
})->name('servicos');