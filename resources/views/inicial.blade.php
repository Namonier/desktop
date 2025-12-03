<x-layout>
    <x-slot:styles>
        <style>

            :root {
                --cor-principal: #8a2be2; /* Azul violeta, remetendo à arte e criatividade */
                --cor-secundaria: #4b0082; /* Indigo, para links e destaques */
                --cor-fundo: #f4f4f9;
                --cor-texto: #333;
                --cor-branco: #fff;
                --sombra-card: 0 4px 8px rgba(0, 0, 0, 0.1);
                --sombra-card-hover: 0 8px 16px rgba(0, 0, 0, 0.15); /* ✨ Sombra para o efeito hover ✨ */
                --borda-radius: 8px;
            }
            img {
                max-width: 100%;
                display: block;
            }

            main {
               padding: 1rem;
            }
            .secao-container { margin-bottom: 2rem; background: var(--cor-branco); padding: 1.5rem; border-radius: var(--borda-radius); box-shadow: var(--sombra-card); }
            .secao-container h2 { font-size: 1.5rem; margin-bottom: 1rem; color: var(--cor-secundaria); border-bottom: 2px solid var(--cor-principal); padding-bottom: 0.5rem; display: inline-block; }
            .video-info { padding-top: 1rem; }
            .video-info h3 { font-size: 1.1rem; margin-bottom: 0.5rem; }
            
            .agenda-flex { display: flex; flex-direction: column; gap: 1rem; }
            .agenda-item a { display: flex; align-items: center; padding: 1rem; gap: 1rem; background-color: var(--cor-fundo); border-radius: var(--borda-radius); transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transição Suave */ }
            /* ✨ HOVER AGENDA ✨ */
            .agenda-item a:hover { transform: translateY(-5px); box-shadow: var(--sombra-card-hover); }

            .data { text-align: center; background-color: var(--cor-principal); color: var(--cor-branco); padding: 0.5rem; border-radius: var(--borda-radius); min-width: 60px; }
            .dia-semana { display: block; font-weight: 600; }
            .dia-mes { display: block; font-size: 1.5rem; font-weight: 600; }
            .evento-titulo { font-weight: 500; font-size: 1.1rem; }
            
            .promocoes-flex { display: grid; grid-template-columns: 1fr; gap: 1rem; }
            .produto-card { display: block; border: 1px solid #ddd; border-radius: var(--borda-radius); overflow: hidden; text-align: center; background: var(--cor-fundo); transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transição Suave */ }
            /* ✨ HOVER PROMOÇÕES ✨ */
            .produto-card:hover { transform: translateY(-5px); box-shadow: var(--sombra-card-hover); }
            
            .produto-info { padding: 1rem; }
            .preco { color: var(--cor-principal); font-weight: 600; font-size: 1.2rem; margin-left: 0.5rem; }
            .video-responsive { overflow: hidden; position: relative; width: 100%; aspect-ratio: 16 / 9; border-radius: var(--borda-radius); }
            .video-responsive iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0; }
            
            .destaque-adicional { margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #eee; text-align: center; }
            .destaque-adicional h3 { font-size: 1.2rem; color: var(--cor-secundaria); margin-bottom: 0.5rem; }
            .destaque-adicional p { color: #666; margin-bottom: 1.5rem; }
            .destaque-botoes { display: flex; gap: 1rem; justify-content: center; text-align: center;}
            .destaque-btn { flex: 1; max-width: 200px; display: inline-block; background-color: var(--cor-principal); color: var(--cor-branco); padding: 0.75rem 1rem; border-radius: var(--borda-radius); font-weight: 500; text-decoration: none; transition: background-color 0.3s ease, transform 0.3s ease; }
            /* ✨ HOVER BOTÕES ✨ */
            .destaque-btn:hover { background-color: var(--cor-secundaria); transform: scale(1.05); }


            

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

            .carrossel {
                position: relative;
                max-width: 600px; /* Aumenta o tamanho do carrossel */
                margin: 40px auto;
                overflow: hidden;
                border-radius: 15px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
                background-color: #fff;
            }

            /* Mantém as imagens na horizontal e com proporção certa */
            .slides {
                display: flex;
                transition: transform 0.6s ease-in-out;
                /* evita que as imagens quebrem linha */
                flex-wrap: nowrap;
            }

            .slides img {
                flex: 0 0 100%;    /* cada imagem ocupa 100% da largura do carrossel */
                width: 100%;
                height: auto;      /* mantém proporção */
                max-height: 400px;      /* <<< define a altura máxima */
                object-fit: cover;  /* preenche o espaço sem distorcer */
                border-radius: 15px;
                cursor: pointer;
                transition: transform 0.3s ease;
            }

            .slides img:hover {
                transform: scale(1.03);
            }

            @media (max-width: 768px) {
            .slides img {
                max-height: 250px;
            }
            }

            /* Botões */
            .anterior,
            .proximo {
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
            }

            .anterior:hover,
            .proximo:hover {
                background-color: rgba(0, 0, 0, 0.8);
            }

            .anterior {
            left: 10px;
            }

            .proximo {
                right: 10px;
            }
            
            /* --- Lightbox (ampliação da imagem) --- */
            .lightbox {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            }

            .lightbox-conteudo {
            margin: auto;
            display: block;
            max-width: 90%;
            max-height: 80vh;
            border-radius: 10px;
            animation: zoom 0.4s;
            }

            #lightbox {
                display: none;
                position: fixed;
                z-index: 1000;
                padding-top: 50px;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0, 0, 0, 0.9);
                text-align: center;
            }

                #lightbox img {
                max-width: 90%;
                max-height: 80vh;
                border-radius: 10px;
            }

                #lightbox-descricao {
                color: #fff;
                margin-top: 15px;
                font-size: 18px;
                font-weight: 400;
                text-align: center;
                max-width: 80%;
                margin-left: auto;
                margin-right: auto;
                line-height: 1.4;
            }

            @keyframes zoom {
            from {
                transform: scale(0.7);
            }

            to {
                transform: scale(1);
            }
            }

            .fechar-lightbox {
            position: absolute;
            top: 20px;
            right: 35px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            }

            .fechar-lightbox:hover {
            color: #f00;
            }
            [wire\:loading] {
                display: block !important;
                visibility: hidden;
            }


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
                        const apiKey = "AIzaSyADn1rBpc_Tf2RHoQdxp4kYvbYv9XykxeE"; 
                        const channelId = "UCAwGovOjkUQSES_hwSYqQrQ";

                        //const url = `https://www.googleapis.com/youtube/v3/search?key=${apiKey}&channelId=${channelId}&part=snippet,id&order=date&maxResults=1`;

                        //const resposta = await fetch(url);
                        //const dados = await resposta.json();

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
                            <a  href="{{ route('sobre') }}" class="destaque-btn">Saiba mais sobre a casa do piano</a>
                            <a  href="{{ route('cursos') }}" class="destaque-btn">Nossos Cursos</a>
                        </div>
                    </div>
                    <div class="destaque-adicional">
                        <h3>Algumas imagens da galeria</h3>
                        <div class="carrossel">
                            <div class="slides">
                                <img src="{{ asset('imagens/tocando-piano.jpg') }}" alt="Aula de piano para todas as idades." class="slide">
                                <img src="{{ asset('imagens/tocando-teclado.jpg') }}" alt="Desenvolva sua técnica no teclado." class="slide">
                                </div>
                                <button class="anterior">&#10094;</button>
                                <button class="proximo">&#10095;</button>
                        </div>
                    </div>

                        <!-- ===== LIGHTBOX ===== -->
                        <div id="lightbox" class="lightbox">
                            <span class="fechar-lightbox" id="fechar-lightbox">&times;</span>
                            <img class="lightbox-conteudo" id="lightbox-img">
                            <p id="lightbox-descricao"></p>
                        </div>
                        <div class="destaque-botoes">
                            <a  href="{{ route('galeria') }}" class="destaque-btn">Ver Mais Fotos</a>
                        </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', () => {
                        // --- LÓGICA DO CARROSSEL (se você já tiver, pode integrar) ---
                        // Adicione aqui a lógica dos botões "anterior" e "próximo" se precisar.
                        // O código abaixo foca apenas na funcionalidade de zoom.

                        // --- LÓGICA DO MODAL DE ZOOM ---

                        // 1. Seleciona os elementos do DOM
                        const modal = document.getElementById('modal-zoom');
                        const imagensDoCarrossel = document.querySelectorAll('.carrossel .slide');
                        const modalImagem = document.getElementById('imagem-zoom');
                        const descricaoZoom = document.getElementById('descricao-zoom');
                        const btnFechar = document.querySelector('.fechar');

                        // 2. Adiciona um evento de clique para CADA imagem do carrossel
                        imagensDoCarrossel.forEach(imagem => {
                            imagem.addEventListener('click', () => {
                                // Pega o caminho da imagem e o texto alternativo (que será a descrição)
                                const imgSrc = imagem.src;
                                const imgAlt = imagem.alt;

                                // Define os valores no modal
                                modalImagem.src = imgSrc;
                                descricaoZoom.textContent = imgAlt;

                                // Mostra o modal
                                modal.style.display = 'flex';
                            });
                        });

                        // 3. Função para fechar o modal
                        const fecharModal = () => {
                            modal.style.display = 'none';
                        };

                        // 4. Adiciona eventos para fechar o modal
                        
                        // Clicando no botão (X)
                        btnFechar.addEventListener('click', fecharModal);

                        // Clicando no fundo escuro, fora da caixa de conteúdo
                        modal.addEventListener('click', (event) => {
                            if (event.target === modal) {
                                fecharModal();
                            }
                        });

                        // Pressionando a tecla "Escape" (ESC)
                        window.addEventListener('keydown', (event) => {
                            if (event.key === 'Escape') {
                                fecharModal();
                            }
                        });
                        function openModal(texto) {
                        const modal = document.getElementById('modal');
                        const modalText = document.getElementById('modal-text');
                        modalText.textContent = texto;
                        modal.style.display = 'block';
                        }

                        function closeModal() {
                        document.getElementById('modal').style.display = 'none';
                        }

                    });


                    </script>
                </div>
            </section>

            <section class="secao-container secao-agenda">
                <h2>Agenda Cultural</h2>
                <div class="agenda-flex">
                    <article class="agenda-item"><a  href="{{ route('agendacultural') }}"><div class="data"><span class="dia-semana">SEX</span><span class="dia-mes">24</span></div><p class="evento-titulo">Exposição de Arte</p></a></article>
                    <article class="agenda-item"><a  href="{{ route('agendacultural') }}"><div class="data"><span class="dia-semana">SÁB</span><span class="dia-mes">25</span></div><p class="evento-titulo">Show de Música</p></a></article>
                </div>
            </section>

            <section class="secao-container secao-promocoes">
                <h2>Loja - Novidades</h2>
                
                <div class="promocoes-flex">

                    @php
                        // 1. Busca os produtos no banco
                        // 'with('images')': Já traz as imagens junto para não dar erro
                        // 'latest()': Ordena do mais novo para o mais antigo (baseado no created_at)
                        // 'take(2)': Pega apenas os 2 primeiros
                        $ultimos_produtos = \App\Models\Product::with('images')->latest()->take(2)->get();
                    @endphp

                    @foreach($ultimos_produtos as $produto)
                        {{-- Link para a página de detalhes passando o ID do produto --}}
                        <a href="{{ route('lojaproduto', $produto->id_product) }}" class="produto-card">
                            
                            {{-- LÓGICA DA IMAGEM --}}
                            @if($produto->images->isNotEmpty())
                                {{-- Pega a primeira imagem encontrada --}}
                                <img src="{{ asset('storage/' . $produto->images->first()->image_url) }}" 
                                    alt="{{ $produto->name }}" 
                                    class="produto-img">
                            @else
                                {{-- Imagem padrão caso o produto não tenha foto --}}
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

                    {{-- Se não tiver produtos, mostra mensagem (opcional) --}}
                    @if($ultimos_produtos->isEmpty())
                        <p style="text-align: center; width: 100%; color: #666;">Nenhum produto recente.</p>
                    @endif

                </div>
            </section>
        </div>

</x-layout>