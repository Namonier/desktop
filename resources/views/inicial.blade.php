<x-layout>
    <x-slot:styles>
        <style>
            :root {
                --cor-principal: #8a2be2;
                --cor-secundaria: #4b0082;
                --cor-fundo: #f4f4f9;
                --cor-texto: #333;
                --cor-branco: #fff;
                --sombra-card: 0 4px 8px rgba(0, 0, 0, 0.1);
                --sombra-card-hover: 0 8px 16px rgba(0, 0, 0, 0.15);
                --borda-radius: 8px;
            }
            img { max-width: 100%; display: block; }
            main { padding: 1rem; }
            .secao-container { margin-bottom: 2rem; background: var(--cor-branco); padding: 1.5rem; border-radius: var(--borda-radius); box-shadow: var(--sombra-card); }
            .secao-container h2 { font-size: 1.5rem; margin-bottom: 1rem; color: var(--cor-secundaria); border-bottom: 2px solid var(--cor-principal); padding-bottom: 0.5rem; display: inline-block; }
            
            /* AGENDA */
            .agenda-flex { display: flex; flex-direction: column; gap: 1rem; }
            .agenda-item a { display: flex; align-items: center; padding: 1rem; gap: 1rem; background-color: var(--cor-fundo); border-radius: var(--borda-radius); transition: transform 0.3s ease, box-shadow 0.3s ease; }
            .agenda-item a:hover { transform: translateY(-5px); box-shadow: var(--sombra-card-hover); }
            .data { text-align: center; background-color: var(--cor-principal); color: var(--cor-branco); padding: 0.5rem; border-radius: var(--borda-radius); min-width: 60px; }
            .dia-semana { display: block; font-weight: 600; }
            .dia-mes { display: block; font-size: 1.5rem; font-weight: 600; }
            .evento-titulo { font-weight: 500; font-size: 1.1rem; }
            
            /* PROMOCOES */
            .promocoes-flex { display: grid; grid-template-columns: 1fr; gap: 1rem; }
            .produto-card { display: block; border: 1px solid #ddd; border-radius: var(--borda-radius); overflow: hidden; text-align: center; background: var(--cor-fundo); transition: transform 0.3s ease, box-shadow 0.3s ease; }
            .produto-card:hover { transform: translateY(-5px); box-shadow: var(--sombra-card-hover); }
            .produto-info { padding: 1rem; }
            .preco { color: var(--cor-principal); font-weight: 600; font-size: 1.2rem; margin-left: 0.5rem; }
            
            /* VIDEO */
            .video-responsive { overflow: hidden; position: relative; width: 100%; aspect-ratio: 16 / 9; border-radius: var(--borda-radius); }
            .video-responsive iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0; }
            
            /* DESTAQUE ADICIONAL */
            .destaque-adicional { margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #eee; text-align: center; }
            .destaque-adicional h3 { font-size: 1.2rem; color: var(--cor-secundaria); margin-bottom: 0.5rem; }
            .destaque-adicional p { color: #666; margin-bottom: 1.5rem; }
            .destaque-botoes { display: flex; gap: 1rem; justify-content: center; text-align: center;}
            .destaque-btn { flex: 1; max-width: 200px; display: inline-block; background-color: var(--cor-principal); color: var(--cor-branco); padding: 0.75rem 1rem; border-radius: var(--borda-radius); font-weight: 500; text-decoration: none; transition: background-color 0.3s ease, transform 0.3s ease; }
            .destaque-btn:hover { background-color: var(--cor-secundaria); transform: scale(1.05); }

            /* LAYOUT DESKTOP */
            @media (min-width: 1024px) {
                main { padding-top: 100px; padding-left: 2rem; padding-right: 2rem; }
                .main-container { max-width: 1200px; margin: 0 auto; padding: 0; display: grid; grid-template-columns: 2fr 1fr; grid-template-areas: "destaque agenda" "destaque promocoes"; gap: 2rem; background: none; box-shadow: none; border-radius: 0; }
                .secao-container { margin-bottom: 0; background: var(--cor-branco); padding: 1.5rem; border-radius: var(--borda-radius); box-shadow: var(--sombra-card); }
                .secao-container h2 { font-size: 1.8rem; }
                .secao-destaque { grid-area: destaque; }
                .secao-agenda { grid-area: agenda; }
                .secao-promocoes { grid-area: promocoes; }
                .promocoes-flex { display: flex; flex-direction: column; }
            }

            /* CARROSSEL */
            .carrossel {
                position: relative;
                max-width: 600px;
                margin: 40px auto;
                overflow: hidden;
                border-radius: 15px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
                background-color: #fff;
            }
            .slides {
                display: flex;
                transition: transform 0.6s ease-in-out;
                flex-wrap: nowrap;
                width: 100%;
            }
            .slides img {
                flex: 0 0 100%; /* Ocupa 100% da largura */
                width: 100%;
                height: auto;
                max-height: 400px;
                object-fit: cover;
                border-radius: 15px;
                cursor: pointer;
                transition: transform 0.3s ease;
            }
            .slides img:hover { transform: scale(1.03); }
            @media (max-width: 768px) { .slides img { max-height: 250px; } }

            .anterior, .proximo {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                background-color: rgba(0, 0, 0, 0.5);
                color: white;
                border: none;
                padding: 10px 15px;
                cursor: pointer;
                border-radius: 50%;
                font-size: 18px;
                z-index: 10;
            }
            .anterior:hover, .proximo:hover { background-color: rgba(0, 0, 0, 0.8); }
            .anterior { left: 10px; }
            .proximo { right: 10px; }
            
            /* LIGHTBOX */
            .lightbox { display: none; position: fixed; z-index: 2000; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.9); }
            .lightbox-conteudo { margin: auto; display: block; max-width: 90%; max-height: 80vh; border-radius: 10px; animation: zoom 0.4s; }
            #lightbox { display: none; position: fixed; z-index: 1000; padding-top: 50px; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.9); text-align: center; }
            #lightbox img { max-width: 90%; max-height: 80vh; border-radius: 10px; }
            #lightbox-descricao { color: #fff; margin-top: 15px; font-size: 18px; font-weight: 400; text-align: center; max-width: 80%; margin-left: auto; margin-right: auto; line-height: 1.4; }
            @keyframes zoom { from { transform: scale(0.7); } to { transform: scale(1); } }
            .fechar-lightbox { position: absolute; top: 20px; right: 35px; color: #fff; font-size: 40px; font-weight: bold; cursor: pointer; }
            .fechar-lightbox:hover { color: #f00; }
        </style>
    </x-slot:styles>

    <div class="main-container">
            <section class="secao-container secao-destaque">
                <h2>Ultimo vídeo do youtube</h2>
                <div class="video-card">
                <div id="video-container">
                        <iframe id="youtube-frame" width="100%" height="315"
                            src=""
                            frameborder="0"
                            allowfullscreen>
                        </iframe>
                    </div>

                    <script>
                    async function carregarUltimoVideo() {
                        const videoId = '{{ $id_youtube_video }}';
                        document.getElementById("youtube-frame").src =
                            `https://www.youtube.com/embed/${videoId}`;
                    }
                    carregarUltimoVideo();
                    </script>
                    

                    <div class="destaque-adicional">
                        <h3>Conheça a Casa do Piano</h3>
                        <p>Um espaço dedicado à arte e à educação musical. Explore nossos cursos, eventos e muito mais.</p>
                        <div class="destaque-botoes">
                            <a href="{{ route('sobre') }}" class="destaque-btn">Saiba mais sobre a casa do piano</a>
                            <a href="{{ route('cursos') }}" class="destaque-btn">Nossos Cursos</a>
                        </div>
                    </div>
                    
                    <div class="destaque-adicional">
                        <h3>Algumas imagens da galeria</h3>
                        
                        {{-- LÓGICA PHP: Buscar imagens aleatórias do banco de dados--}}
                        @php
                            // 'inRandomOrder': Traz aleatórias.
                            // 'take(5)': Limita a 5 fotos no carrossel da home
                            $imagens_home = \App\Models\GalleryImage::inRandomOrder()->take(5)->get();
                        @endphp

                        {{-- 2. HTML: Estrutura do Carrossel Dinâmico --}}
                        <div class="carrossel" id="carrossel-home">
                            
                            <div class="slides" data-indice="0">
                                @forelse($imagens_home as $img)
                                    <img src="{{ asset('storage/' . $img->image_url) }}" 
                                         alt="{{ $img->description ?? 'Foto da Galeria' }}" 
                                         class="slide"
                                         data-descricao="{{ $img->description ?? '' }}">
                                @empty
                                    {{-- Imagem de fallback caso não tenha nada no banco --}}
                                    <img src="https://via.placeholder.com/800x400?text=Sem+Imagens" alt="Sem imagens" class="slide">
                                @endforelse
                            </div>

                            {{-- Botões de navegação --}}
                            @if($imagens_home->count() > 1)
                                <button class="anterior" onclick="mudarSlide('carrossel-home', -1)">&#10094;</button>
                                <button class="proximo" onclick="mudarSlide('carrossel-home', 1)">&#10095;</button>
                            @endif
                        </div>

                    </div>

                        <div id="lightbox" class="lightbox">
                            <span class="fechar-lightbox" id="fechar-lightbox">&times;</span>
                            <img class="lightbox-conteudo" id="lightbox-img">
                            <p id="lightbox-descricao"></p>
                        </div>
                        <div class="destaque-botoes">
                            <a href="{{ route('galeria') }}" class="destaque-btn">Ver Mais Fotos</a>
                        </div>
                </div>
            </section>

            <section class="secao-container secao-agenda">
                <h2>Agenda Cultural</h2>
                
                <div class="agenda-flex">
                    @php
                        $proximos_eventos = \App\Models\Event::orderBy('event_datetime', 'asc')->take(2)->get();
                    @endphp

                    @foreach($proximos_eventos as $evento)
                        <article class="agenda-item">
                            <a href="{{ route('agendacultural.menu', $evento->id_event) }}">
                            <div class="data">
                                <span class="dia-semana">
                                    {{ mb_strtoupper(\Carbon\Carbon::parse($evento->event_datetime)->locale('pt_BR')->shortDayName) }}
                                </span>
                                <span class="dia-mes">
                                    {{ \Carbon\Carbon::parse($evento->event_datetime)->format('d') }}
                                </span>
                            </div>
                                <p class="evento-titulo">{{ $evento->title }}</p>
                            </a>
                        </article>
                    @endforeach

                    @if($proximos_eventos->isEmpty())
                        <p style="color: #666;">Nenhum evento agendado.</p>
                    @endif
                </div>
            </section>

            <section class="secao-container secao-promocoes">
                <h2>Loja - Novidades</h2>
                <div class="promocoes-flex">
                    

                    @foreach($ultimos_produtos as $produto)
                        <a href="{{ route('lojaproduto', $produto->id_product) }}" class="produto-card">
                            @if($produto->images->isNotEmpty())
                                <img src="{{ asset('storage/' . $produto->images->first()->image_url) }}" 
                                    alt="{{ $produto->name }}" 
                                    class="produto-img">
                            @else
                                <img src="https://via.placeholder.com/300?text=Sem+Foto" 
                                    alt="Imagem indisponível" 
                                    class="produto-img">
                            @endif
                            <div class="produto-info">
                                <p>{{ $produto->name }}</p>
                                <span class="preco">
                                    R$ {{ number_format($produto->price, 2, ',', '.') }}
                                </span>
                            </div>
                        </a>
                    @endforeach

                    @if($ultimos_produtos->isEmpty())
                        <p style="text-align: center; width: 100%; color: #666;">Nenhum produto recente.</p>
                    @endif
                </div>
            </section>
    </div>

    {{-- 3. JAVASCRIPT: Lógica do Carrossel e Lightbox --}}
    <script>
        // --- FUNÇÃO PARA MOVER O CARROSSEL ---
        function mudarSlide(carrosselId, direcao) {
            const carrossel = document.getElementById(carrosselId);
            const containerSlides = carrossel.querySelector('.slides');
            const totalSlides = containerSlides.querySelectorAll('img').length;
            
            if (totalSlides === 0) return;

            // Recupera índice atual ou começa do 0
            let indiceAtual = parseInt(containerSlides.getAttribute('data-indice')) || 0;
            indiceAtual += direcao;

            // Loop infinito
            if (indiceAtual >= totalSlides) indiceAtual = 0;
            if (indiceAtual < 0) indiceAtual = totalSlides - 1;

            // Aplica mudança
            containerSlides.setAttribute('data-indice', indiceAtual);
            containerSlides.style.transform = `translateX(-${indiceAtual * 100}%)`;
        }

        // --- LÓGICA DO LIGHTBOX (ZOOM) ---
        document.addEventListener('DOMContentLoaded', () => {
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            const lightboxDesc = document.getElementById('lightbox-descricao');
            const btnFechar = document.getElementById('fechar-lightbox');
            
            // Pega todas as imagens com a classe 'slide'
            const imagens = document.querySelectorAll('.slide');

            imagens.forEach(img => {
                img.addEventListener('click', () => {
                    lightbox.style.display = "block";
                    lightboxImg.src = img.src;
                    // Pega descrição do atributo data-descricao ou alt
                    lightboxDesc.innerText = img.getAttribute('data-descricao') || img.alt;
                });
            });

            // Funções para fechar
            const fecharModal = () => { lightbox.style.display = "none"; };

            if(btnFechar) btnFechar.addEventListener('click', fecharModal);

            // Fecha clicando fora
            lightbox.addEventListener('click', (e) => {
                if (e.target === lightbox) fecharModal();
            });

            // Fecha com ESC
            window.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') fecharModal();
            });
        });
    </script>
</x-layout>