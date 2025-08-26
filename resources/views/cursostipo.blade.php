<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Casa do Piano - Cursos de Música</title>

    <link rel="shortcut icon" href="apple-icon-180x180.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Poppins', sans-serif; background-color: var(--cor-fundo); color: var(--cor-texto); -webkit-font-smoothing: antialiased; }
        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }

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
            padding: 1rem 0;
        }

        /* ✨✨✨ ESTILOS ATUALIZADOS PARA A PÁGINA DE CURSOS ✨✨✨ */

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
        
        /* Grid para os cards de curso */
        .cursos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        /* Card de curso individual */
        .curso-card {
            background-color: var(--cor-branco);
            border-radius: var(--borda-radius);
            box-shadow: var(--sombra-card);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .curso-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .curso-card-imagem img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .curso-card-conteudo {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1; /* Faz o conteúdo crescer para alinhar os botões */
        }

        .curso-card-conteudo h3 {
            font-size: 1.75rem;
            color: var(--cor-secundaria);
            margin-bottom: 0.75rem;
        }
        
        .curso-card-conteudo p {
            font-size: 1rem;
            line-height: 1.6;
            color: #666;
            flex-grow: 1; 
            margin-bottom: 1.5rem;
        }
        
        .curso-btn {
            display: block;
            background-color: var(--cor-principal);
            color: var(--cor-branco);
            padding: 0.75rem 1.5rem;
            border-radius: var(--borda-radius);
            font-weight: 500;
            text-decoration: none;
            text-align: center;
            margin-top: auto; /* Empurra o botão para o final do card */
            transition: background-color 0.3s ease;
        }
        
        .curso-btn:hover {
            background-color: var(--cor-secundaria);
        }
        
        /* --- RODAPÉ --- */
        .rodape { background-color: #333; color: var(--cor-branco); text-align: center; padding: 2rem 1rem; font-size: 0.9rem; margin-top: 2rem;}
        .rodape p { margin-bottom: 0.5rem; }

        /* --- VERSÃO DESKTOP --- */
        @media (min-width: 1024px) {
            .cabecalho-mobile { display: none; }
            .menu-lateral { width: 100%; height: 70px; position: fixed; transform: translateX(0); flex-direction: row; justify-content: space-between; align-items: center; padding: 0 2rem; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
            .menu-lateral-cabecalho { border: none; padding: 0; }
            #fechar-menu-btn { display: none; }
            .menu-lateral ul { display: flex; flex-direction: row; align-items: center; gap: 1rem; padding: 0; }
            .menu-lateral ul a { padding: 0.5rem 1rem; font-weight: 500; }
            .menu-lateral ul a:hover { background-color: transparent; color: var(--cor-principal); }
            main { padding-top: 100px; }
            .main-container { padding: 2rem; }
        }
    </style>
</head>

<body>
    <nav class="menu-lateral">
        <div class="menu-lateral-cabecalho">
            <a href="index.html" class="logo-link"><img src="logo_casa_do_piano.jpeg" alt="Logo Casa do Piano" class="logo"><span class="logo-texto">Casa do Piano</span></a>
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
        <a href="index.html" class="logo-link-mobile" aria-label="Voltar para a página inicial"><img src="logo_casa_do_piano.jpeg" alt="Logo da Casa do Piano" class="logo"></a>
    </header>

    <main>
        <div class="main-container">

            <div class="pagina-cabecalho">
                <h1>Nossos Cursos de Música</h1>
                <p>Escolha seu instrumento e comece sua jornada musical conosco.</p>
            </div>

            <div class="cursos-grid">

                <div class="curso-card">
                    <div class="curso-card-imagem">
                        <img src="https://placehold.co/600x400/8a2be2/FFF?text=Violão" alt="Curso de Violão">
                    </div>
                    <div class="curso-card-conteudo">
                        <h3>Curso de Violão</h3>
                        <p>Aprenda a tocar violão do zero, passando pelos ritmos populares, acordes e técnicas para tocar suas músicas favoritas.</p>
                        <a href="{{ route('cursosdescricao') }}" class="curso-btn">Ver Detalhes do Curso</a>
                    </div>
                </div>

                <div class="curso-card">
                    <div class="curso-card-imagem">
                        <img src="https://placehold.co/600x400/4b0082/FFF?text=Teclado" alt="Curso de Teclado">
                    </div>
                    <div class="curso-card-conteudo">
                        <h3>Curso de Teclado</h3>
                        <p>Explore o universo das teclas, aprendendo harmonia, melodia e acompanhamentos para diversos estilos musicais.</p>
                        <a href="{{ route('cursosdescricao') }}" class="curso-btn">Ver Detalhes do Curso</a>
                    </div>
                </div>

                <div class="curso-card">
                    <div class="curso-card-imagem">
                        <img src="https://placehold.co/600x400/8a2be2/FFF?text=Piano" alt="Curso de Piano">
                    </div>
                    <div class="curso-card-conteudo">
                        <h3>Curso de Piano</h3>
                        <p>Do clássico ao popular, desenvolva sua técnica e expressividade no mais completo dos instrumentos com nosso método exclusivo.</p>
                        <a href="{{ route('cursosdescricao') }}" class="curso-btn">Ver Detalhes do Curso</a>
                    </div>
                </div>
                
                </div>

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