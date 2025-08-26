<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa do Piano</title>
    <link rel="shortcut icon" href="apple-icon-180x180.png" type="image/x-icon">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        /* --- ESTILOS GERAIS E MOBILE (MOBILE FIRST) --- */
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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--cor-fundo);
            color: var(--cor-texto);
            -webkit-font-smoothing: antialiased;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        ul {
            list-style: none;
        }

        /* --- HEADER MOBILE --- */
        .cabecalho-mobile { display: flex; justify-content: space-between; align-items: center; padding: 1rem; background-color: var(--cor-branco); box-shadow: 0 2px 4px rgba(0,0,0,0.05); position: sticky; top: 0; z-index: 999; }
        .cabecalho-mobile h1 { font-size: 1.25rem; color: var(--cor-principal); }
        .logo { width: 40px; height: 40px; border-radius: 50%; }
        .menu-btn { background: none; border: none; cursor: pointer; display: flex; flex-direction: column; gap: 5px; }
        .menu-btn span { display: block; width: 25px; height: 3px; background-color: var(--cor-texto); }

        /* --- MENU LATERAL (MOBILE) --- */
        .menu-lateral { position: fixed; top: 0; left: 0; width: 250px; height: 100vh; background-color: var(--cor-branco); box-shadow: 2px 0 10px rgba(0,0,0,0.1); transform: translateX(-100%); transition: transform 0.3s ease-in-out; z-index: 1000; display: flex; flex-direction: column; }
        .menu-lateral.aberto { transform: translateX(0); }
        .menu-lateral-cabecalho { display: flex; align-items: center; padding: 1rem; border-bottom: 1px solid #eee; }
        .logo-link { display: flex; align-items: center; gap: 10px; font-weight: 600; font-size: 1.1rem; color: var(--cor-principal); }
        #fechar-menu-btn { background: none; border: none; cursor: pointer; margin-left: auto; color: var(--cor-texto); }
        .menu-lateral ul { padding: 1rem; }
        .menu-lateral ul a { display: block; padding: 0.8rem; border-radius: var(--borda-radius); transition: background-color 0.2s, color 0.2s; }
        .menu-lateral ul a:hover { background-color: var(--cor-fundo); color: var(--cor-principal); }

        /* --- CONTEÚDO PRINCIPAL (MOBILE) --- */
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
        
        .rodape { background-color: #333; color: var(--cor-branco); text-align: center; padding: 2rem 1rem; font-size: 0.9rem; }
        .rodape p { margin-bottom: 0.5rem; }

        /* --- VERSÃO DESKTOP --- */
        @media (min-width: 1024px) {
            .cabecalho-mobile { display: none; }
            .menu-lateral { width: 100%; position: fixed; height: 70px; transform: translateX(0); flex-direction: row; justify-content: space-between; align-items: center; padding: 0 2rem; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
            .menu-lateral-cabecalho { border: none; padding: 0; }
            #fechar-menu-btn { display: none; }
            .menu-lateral ul { display: flex; flex-direction: row; align-items: center; gap: 1rem; padding: 0; }
            .menu-lateral ul a { padding: 0.5rem 1rem; font-weight: 500; transition: color 0.3s ease, transform 0.3s ease; }
            .menu-lateral ul li:first-child a { margin-left: 1rem; }
            .menu-lateral ul a:hover { background-color: transparent; color: var(--cor-principal); transform: scale(1.1); }
            
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
</head>
<body>

    <nav class="menu-lateral">
        <div class="menu-lateral-cabecalho">
            <a href="{{ route('inicial') }}" class="logo-link"><img src="logo_casa_do_piano.jpeg" alt="Logo Casa do Piano" class="logo"><span class="logo-texto">Casa do Piano</span></a>
            <button id="fechar-menu-btn" aria-label="Fechar menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>
        <ul>
            <li><a href="{{ route('inicial') }}">Início</a></li>
            <li><a href="{{ route('agendacultural') }}">Agenda Cultural</a></li>
            <li><a href="{{ route('blog') }}">Blog</a></li>
            <li><a href="{{ route('cursos') }}">Cursos</a></li>
            <li><a href="{{ route('galeria') }}">Galeria</a></li>
            <li><a href="{{ route('loja') }}">Loja</a></li>
            <li><a href="{{ route('parceiros') }}">Parceiros</a></li>
            <li><a href="{{ route('servicos') }}">Serviços</a></li>
            <li><a href="{{ route('sobre') }}">Sobre</a></li>
        </ul>
    </nav>

    <header class="cabecalho-mobile">
        <button class="menu-btn" aria-label="Abrir menu"><span></span><span></span><span></span></button>
        <h1>Casa do Piano</h1>
        <a href="{{ route('inicial') }}" class="logo-link-mobile" aria-label="Voltar para a página inicial"><img src="logo_casa_do_piano.jpeg" alt="Logo da Casa do Piano" class="logo"></a>
    </header>

    <main>
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
    </main>

    <footer class="rodape">
        <p><strong>Casa do Piano - Mossoró</strong></p>
        <p>Rua Joaquim Bruno Mota, 58 Bairro Abolição, Mossoró</p>
        <p>Email: casadopianomossoro@gmail.com</p>
        <p>WhatsApp: (84) 98737-9538</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.querySelector('.menu-btn');
            const fecharMenuBtn = document.querySelector('#fechar-menu-btn');
            const menuLateral = document.querySelector('.menu-lateral');
            if (menuBtn && menuLateral) {
                menuBtn.addEventListener('click', () => {
                    menuLateral.classList.add('aberto');
                });
            }
            if (fecharMenuBtn && menuLateral) {
                fecharMenuBtn.addEventListener('click', () => {
                    menuLateral.classList.remove('aberto');
                });
            }
        });
    </script>
</body>
</html>