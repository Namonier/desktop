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
            .preco-antigo { text-decoration: line-through; color: #999; }
            .preco-novo { color: var(--cor-principal); font-weight: 600; font-size: 1.2rem; margin-left: 0.5rem; }
            .video-responsive { overflow: hidden; position: relative; width: 100%; aspect-ratio: 16 / 9; border-radius: var(--borda-radius); }
            .video-responsive iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0; }
            
            .destaque-adicional { margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #eee; text-align: center; }
            .destaque-adicional h3 { font-size: 1.2rem; color: var(--cor-secundaria); margin-bottom: 0.5rem; }
            .destaque-adicional p { color: #666; margin-bottom: 1.5rem; }
            .destaque-botoes { display: flex; gap: 1rem; justify-content: center; }
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
        </style>
    </x-slot:styles>

    <div class="main-container">
            <section class="secao-container secao-destaque">
                <h2>Destaque da Semana</h2>
                <div class="video-card">
                    <div class="video-responsive">
                        <iframe src="https://www.youtube.com/embed/NmdT_Sje0OY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="video-info">
                        <h3>Recital Casa do Piano - Alan</h3>
                        <p>Confira a belíssima apresentação do nosso aluno Alan. Uma performance emocionante que marca o encerramento do semestre.</p>
                    </div>
                    <div class="destaque-adicional">
                        <h3>Conheça a Casa do Piano</h3>
                        <p>Um espaço dedicado à arte e à educação musical. Explore nossos cursos, eventos e muito mais.</p>
                        <div class="destaque-botoes">
                            <a href="{{ route('blog') }}" class="destaque-btn">Ver Mais Vídeos</a>
                            <a href="{{ route('cursos') }}" class="destaque-btn">Nossos Cursos</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="secao-container secao-agenda">
                <h2>Agenda Cultural</h2>
                <div class="agenda-flex">
                    <article class="agenda-item"><a href="{{ route('agendacultural') }}"><div class="data"><span class="dia-semana">SEX</span><span class="dia-mes">24</span></div><p class="evento-titulo">Exposição de Arte</p></a></article>
                    <article class="agenda-item"><a href="{{ route('agendacultural') }}"><div class="data"><span class="dia-semana">SÁB</span><span class="dia-mes">25</span></div><p class="evento-titulo">Show de Música</p></a></article>
                </div>
            </section>

            <section class="secao-container secao-promocoes">
                <h2>Promoções</h2>
                <div class="promocoes-flex">
                       <a href="{{ route('lojaproduto') }}" class="produto-card">
                        <img src="{{ asset('imagens/violaolaranja.jpeg') }}" alt="Violão clássico" class="produto-img">
                        <div class="produto-info"><p>Violão Clássico Acústico</p><span class="preco-antigo">R$650</span><span class="preco-novo">por R$459</span></div>
                    </a>
                    <a href="{{ route('lojaproduto') }}" class="produto-card">
                        <img src="{{ asset('imagens/pandeiro.webp') }}" alt="Pandeiro profissional" class="produto-img">
                        <div class="produto-info"><p>Pandeiro Profissional de Couro</p><span class="preco-antigo">R$380</span><span class="preco-novo">por R$219</span></div>
                    </a>
                </div>
            </section>
        </div>

</x-layout>