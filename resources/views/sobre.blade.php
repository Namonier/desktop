<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Casa do Piano - Sobre Nós</title>

    <link rel="shortcut icon" href="apple-icon-180x180.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        /* --- ESTILOS GERAIS E MOBILE (MOBILE FIRST) --- */
        :root {
            --cor-principal: #8a2be2;
            --cor-secundaria: #4b0082;
            --cor-fundo: #f4f4f9;
            --cor-texto: #333;
            --cor-branco: #fff;
            --sombra-card: 0 4px 8px rgba(0, 0, 0, 0.1);
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

        ul {
            list-style: none;
        }

        /* --- HEADER E NAVEGAÇÃO (Padrão do site) --- */
        .cabecalho-mobile { display: flex; justify-content: space-between; align-items: center; padding: 1rem; background-color: var(--cor-branco); box-shadow: 0 2px 4px rgba(0,0,0,0.05); position: sticky; top: 0; z-index: 999; }
        .cabecalho-mobile h1 { font-size: 1.25rem; color: var(--cor-principal); }
        .logo { width: 40px; height: 40px; border-radius: 50%; }
        .menu-btn { background: none; border: none; cursor: pointer; display: flex; flex-direction: column; gap: 5px; }
        .menu-btn span { display: block; width: 25px; height: 3px; background-color: var(--cor-texto); }
        .menu-lateral { position: fixed; top: 0; left: 0; width: 250px; height: 100vh; background-color: var(--cor-branco); box-shadow: 2px 0 10px rgba(0,0,0,0.1); transform: translateX(-100%); transition: transform 0.3s ease-in-out; z-index: 1000; display: flex; flex-direction: column; }
        .menu-lateral.aberto { transform: translateX(0); }
        .menu-lateral-cabecalho { display: flex; align-items: center; padding: 1rem; border-bottom: 1px solid #eee; }
        .logo-link { display: flex; align-items: center; gap: 10px; font-weight: 600; font-size: 1.1rem; color: var(--cor-principal); }
        #fechar-menu-btn { background: none; border: none; cursor: pointer; margin-left: auto; color: var(--cor-texto); }
        .menu-lateral ul { padding: 1rem; }
        .menu-lateral ul a { display: block; padding: 0.8rem; border-radius: var(--borda-radius); transition: background-color 0.2s, color 0.2s; }
        .menu-lateral ul a:hover { background-color: var(--cor-fundo); color: var(--cor-principal); }

        /* --- CONTEÚDO PRINCIPAL (Estilos base) --- */
        main {
            padding: 1rem;
        }

        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }

        /* ✨✨✨ NOVOS ESTILOS PARA A PÁGINA "SOBRE" ✨✨✨ */

        .pagina-cabecalho {
            text-align: center;
            margin-bottom: 2rem;
            padding: 2rem 1rem;
            background-color: var(--cor-branco);
            border-radius: var(--borda-radius);
            box-shadow: var(--sombra-card);
        }

        .pagina-cabecalho h1 {
            color: var(--cor-secundaria);
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .sobre-container {
            display: grid;
            grid-template-columns: 1fr; /* Uma coluna no mobile */
            gap: 2rem;
            align-items: center;
            background-color: var(--cor-branco);
            padding: 2rem;
            border-radius: var(--borda-radius);
            box-shadow: var(--sombra-card);
        }

        .sobre-imagem img {
            border-radius: var(--borda-radius);
            width: 100%;
            height: auto;
        }

        .sobre-texto h2 {
            font-size: 2rem;
            color: var(--cor-secundaria);
            margin-bottom: 1rem;
        }

        .sobre-texto p {
            font-size: 1rem;
            line-height: 1.8;
            color: #666;
            margin-bottom: 1rem;
        }

        .redes-sociais {
            text-align: center;
            margin-top: 3rem;
            padding: 2rem;
            background-color: var(--cor-fundo);
            border-radius: var(--borda-radius);
        }

        .redes-sociais h3 {
            font-size: 1.5rem;
            color: var(--cor-secundaria);
            margin-bottom: 1rem;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
        }

        .social-link a {
            display: block;
            transition: transform 0.3s ease;
        }

        .social-link a:hover {
            transform: scale(1.1);
        }

        .social-link svg {
            width: 48px;
            height: 48px;
            fill: var(--cor-principal);
        }

        .mapa-container {
            margin-top: 2rem;
            padding: 2rem;
            display: grid;
            grid-template-columns: 1fr; /* Uma coluna no mobile */
            gap: 2rem;
            align-items: center;
            background-color: var(--cor-branco);
            padding: 2rem;
            border-radius: var(--borda-radius);
            box-shadow: var(--sombra-card);
        }

        .sobre-mapa h2 {
            font-size: 2rem;
            color: var(--cor-secundaria);
            margin-bottom: 1rem;
            text-align: center;
        }

        .mapa {
            overflow: hidden;
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9;
            border-radius: var(--borda-radius);
            border: 1px solid #ddd;
        }
        .mapa iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
        
        /* --- RODAPÉ --- */
        .rodape { background-color: #333; color: var(--cor-branco); text-align: center; padding: 2rem 1rem; font-size: 0.9rem; margin-top: 2rem;}
        .rodape p { margin-bottom: 0.5rem; }

        /* --- VERSÃO DESKTOP --- */
        @media (min-width: 1024px) {
            .cabecalho-mobile { display: none; }
            .menu-lateral { width: 100%; position: fixed; height: 70px; transform: translateX(0); flex-direction: row; justify-content: space-between; align-items: center; padding: 0 2rem; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
            .menu-lateral-cabecalho { border: none; padding: 0; }
            #fechar-menu-btn { display: none; }
            .menu-lateral ul { display: flex; flex-direction: row; align-items: center; gap: 1rem; padding: 0; }
            .menu-lateral ul a { padding: 0.5rem 1rem; font-weight: 500; }
            .menu-lateral ul a:hover { background-color: transparent; color: var(--cor-principal); }
            main { padding-top: 100px; }
            .main-container { padding: 2rem; }


            /* Layout de 2 colunas para a seção "Sobre" no desktop */
            .sobre-container {
                grid-template-columns: 1fr 2fr; /* Coluna da imagem menor que a do texto */
                gap: 3rem;
                padding: 3rem;
            }
        }
    </style>
</head>

<body>

    <nav class="menu-lateral">
        <div class="menu-lateral-cabecalho">
            <a href="{{ route('inicial') }}" class="logo-link">
                <img src="logo_casa_do_piano.jpeg" alt="Logo Casa do Piano" class="logo">
                <span class="logo-texto">Casa do Piano</span>
            </a>
            <button id="fechar-menu-btn" aria-label="Fechar menu"></button>
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
        <a href="{{ route('inicial') }}" class="logo-link-mobile" aria-label="Voltar para a página inicial">
            <img src="logo_casa_do_piano.jpeg" alt="Logo da Casa do Piano" class="logo">
        </a>
    </header>

    <main>
        <div class="main-container">

            <div class="pagina-cabecalho">
                <h1>Sobre Nós</h1>
                <p>Mais que uma loja, um ponto de encontro para a música.</p>
            </div>

            <div class="sobre-container">
                <div class="sobre-imagem">
                    <img src="{{ asset('imagens/sobrecasadopiano.webp') }}" alt="Espaço interno da Casa do Piano">
                </div>
                <div class="sobre-texto">
                    <h2>Nossa História</h2>
                    <p>
                        Bem-vindo à Casa do Piano! Fundada com a paixão pela música e o desejo de criar um espaço acolhedor para artistas em Mossoró, nossa casa é um centro vibrante para a cultura musical. Desde o início, nossa missão é oferecer não apenas produtos de alta qualidade, mas também educação, inspiração e um palco para novos talentos.
                    </p>
                    <p>
                        Oferecemos uma gama completa de cursos, serviços para eventos, uma loja com instrumentos selecionados e uma agenda cultural ativa. Acreditamos que a música tem o poder de transformar vidas e estamos aqui para apoiar cada passo da sua jornada musical.
                    </p>
                </div>

            </div>
            <div class="mapa-container">            
                <section>
                    <div class="sobre-mapa">
                        <h2>Localização</h2>
                        <div class="mapa">
                            <iframe src="https://www.google.com/maps/embed?pb=!4v1756085458202!6m8!1m7!1szjnTwN9gC3Hm-IPiK1vctQ!2m2!1d-5.169531382106174!2d-37.36253883003268!3f358.2217240912843!4f-11.8744043185892!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </section>
            </div>


            <section class="redes-sociais">
                <h3>Conecte-se Conosco</h3>
                <div class="social-links">
                    <div class="social-link">
                        <a href="https://wa.me/5584987379538" target="_blank" aria-label="Link para o WhatsApp">
                            <img src="{{ asset('imagens/icon-whatsapp.png') }}" alt="Imagem do icone do WhatsApp">
                        </a>
                    </div>
                    <div class="social-link">
                        <a href="https://www.instagram.com/casadopianomossoro/#" target="_blank" aria-label="Link para o Instagram">
                        <img src="{{ asset('imagens/icon-instagram.png') }}" alt="Imagem do icone do Instagram">
                        </a>
                    </div>
                    <div class="social-link">
                        <a href="http://www.youtube.com/channel/UCAwGovOjkUQSES_hwSYqQrQ" target="_blank" aria-label="Link para o YouTube">
                            <img src="{{ asset('imagens/icon-youtube.png') }}" alt="Imagem do icone do YouTube">
                        </a>
                    </div>
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
            if (menuBtn && menuLateral) { menuBtn.addEventListener('click', () => { menuLateral.classList.add('aberto'); }); }
            if (fecharMenuBtn && menuLateral) { fecharMenuBtn.addEventListener('click', () => { menuLateral.classList.remove('aberto'); }); }
        });
    </script>
</body>

</html>