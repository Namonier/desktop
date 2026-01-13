<x-layout>
    <x-slot:styles>
        <style>
            /* --- SEU CSS ORIGINAL (Mantido e Ajustado) --- */
            .pagina-cabecalho { text-align: center; margin-bottom: 2rem; padding: 2rem 1rem; background-color: var(--cor-branco); border-radius: var(--borda-radius); box-shadow: var(--sombra-card); }
            .pagina-cabecalho h1 { color: var(--cor-secundaria); font-size: 2.5rem; margin-bottom: 0.5rem; }
            
            .carrossel { position: relative; max-width: 800px; margin: 40px auto; overflow: hidden; border-radius: 15px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); background-color: #fff; }
            .slides { display: flex; transition: transform 0.5s ease-in-out; width: 100%; }
            .slide-img { min-width: 100%; height: 400px; object-fit: cover; cursor: pointer; }
            
            .anterior, .proximo { position: absolute; top: 50%; transform: translateY(-50%); background-color: rgba(0, 0, 0, 0.5); color: white; border: none; padding: 10px 15px; cursor: pointer; border-radius: 50%; font-size: 18px; z-index: 10; }
            .anterior { left: 10px; }
            .proximo { right: 10px; }
            
            /* --- CSS DO LIGHTBOX --- */
            .lightbox { display: none; position: fixed; z-index: 2000; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.95); text-align: center; }
            .lightbox-conteudo { margin: auto; display: block; max-width: 90%; max-height: 70vh; margin-top: 50px; border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.5); }
            
            /* Estilo da Descrição */
            #lightbox-descricao {
                color: #fff;
                margin-top: 20px;
                font-size: 1.2rem;
                font-weight: 400;
                max-width: 80%;
                margin-left: auto;
                margin-right: auto;
                line-height: 1.5;
                font-family: sans-serif;
            }

            .fechar-lightbox { position: absolute; top: 20px; right: 35px; color: #fff; font-size: 40px; font-weight: bold; cursor: pointer; transition: 0.3s; }
            .fechar-lightbox:hover { color: #ff4444; }
        </style>
    </x-slot:styles>

    <div class="main-container">

        {{-- ===== SEÇÃO 1: GALERIA GERAL ===== --}}
        <div class="pagina-cabecalho">
            <h1>Galeria de Fotos</h1>
        </div>
        
        <div class="carrossel" id="carrossel-geral">
            <div class="slides" data-indice="0">
                @forelse($imagensGerais as $img)
                    <img src="{{ asset('storage/' . $img['image_url']) }}" 
                         alt="Foto Galeria" 
                         class="slide-img"
                         {{-- AQUI ESTÁ O SEGREDO: Guardamos a descrição neste atributo --}}
                         data-descricao="{{ $img['description'] ?? 'Sem descrição' }}">
                @empty
                    <div style="padding: 50px; text-align: center; width: 100%;">
                        <p>Nenhuma imagem na galeria geral.</p>
                    </div>
                @endforelse
            </div>
            
            @if($imagensGerais->count() > 1)
                <button class="anterior" onclick="mudarSlide('carrossel-geral', -1)">&#10094;</button>
                <button class="proximo" onclick="mudarSlide('carrossel-geral', 1)">&#10095;</button>
            @endif
        </div>


        {{-- ===== SEÇÃO 2: AGENDA CULTURAL ===== --}}
        <div class="pagina-cabecalho" style="margin-top: 50px;">
            <h1>Fotos da Agenda Cultural</h1>
        </div>

        <div class="carrossel" id="carrossel-eventos">
            <div class="slides" data-indice="0">
                @forelse($imagensEventos as $img)
                    <img src="{{ asset('storage/' . $img['image_url']) }}" 
                         alt="Foto Evento" 
                         class="slide-img"
                         {{-- AQUI TAMBÉM: Guardamos a descrição --}}
                         data-descricao="{{ $img['description'] ?? 'Sem descrição' }}">
                @empty
                     <div style="padding: 50px; text-align: center; width: 100%;">
                        <p>Nenhuma imagem de eventos.</p>
                    </div>
                @endforelse
            </div>

            @if($imagensEventos->count() > 1)
                <button class="anterior" onclick="mudarSlide('carrossel-eventos', -1)">&#10094;</button>
                <button class="proximo" onclick="mudarSlide('carrossel-eventos', 1)">&#10095;</button>
            @endif
        </div>

    </div>

    {{-- ===== LIGHTBOX (MODAL) ===== --}}
    <div id="lightbox" class="lightbox" onclick="fecharLightbox(event)">
        <span class="fechar-lightbox" onclick="fecharLightbox(event)">&times;</span>
        
        <img class="lightbox-conteudo" id="lightbox-img">
        
        {{-- ADICIONEI ESTE PARÁGRAFO PARA A DESCRIÇÃO APARECER --}}
        <p id="lightbox-descricao"></p>
    </div>

    {{-- ===== JAVASCRIPT ===== --}}
    <script>
        // --- Lógica do Carrossel ---
        function mudarSlide(carrosselId, direcao) {
            const carrossel = document.getElementById(carrosselId);
            const containerSlides = carrossel.querySelector('.slides');
            const totalSlides = containerSlides.querySelectorAll('img').length;
            
            if (totalSlides === 0) return;

            let indiceAtual = parseInt(containerSlides.getAttribute('data-indice')) || 0;
            indiceAtual += direcao;

            if (indiceAtual >= totalSlides) indiceAtual = 0;
            if (indiceAtual < 0) indiceAtual = totalSlides - 1;

            containerSlides.setAttribute('data-indice', indiceAtual);
            containerSlides.style.transform = `translateX(-${indiceAtual * 100}%)`;
        }

        // --- Lógica do Lightbox (COM DESCRIÇÃO) ---
        const imagens = document.querySelectorAll('.slide-img');
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const lightboxDesc = document.getElementById('lightbox-descricao'); // Pega o parágrafo

        imagens.forEach(img => {
            img.addEventListener('click', function() {
                // 1. Abre o Modal
                lightbox.style.display = "block";
                
                // 2. Coloca a imagem
                lightboxImg.src = this.src;
                
                // 3. PEGA A DESCRIÇÃO DO ATRIBUTO E COLOCA NO PARÁGRAFO
                // Se não tiver descrição, deixa vazio
                let texto = this.getAttribute('data-descricao');
                if(texto === 'Sem descrição') texto = ''; 
                
                lightboxDesc.innerText = texto;
            });
        });

        function fecharLightbox(e) {
            // Fecha se clicar no X ou fora da imagem/texto
            if (e.target !== lightboxImg && e.target !== lightboxDesc) {
                lightbox.style.display = "none";
            }
        }
    </script>

</x-layout>