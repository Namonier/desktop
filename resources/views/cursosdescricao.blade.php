<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Curso de Iniciação Musical - Casa do Piano</title>

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
        }

        /* ✨✨✨ NOVOS ESTILOS PARA A PÁGINA DE DESCRIÇÃO DO CURSO ✨✨✨ */
        .curso-header {
            margin-bottom: 2rem;
            text-align: center;
        }

        .curso-header h1 {
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--cor-secundaria);
            line-height: 1.2;
        }

        .curso-header p {
            font-size: 1.2rem;
            color: #555;
            margin-top: 0.5rem;
        }
        
        .curso-detalhe-grid {
            display: grid;
            grid-template-columns: 1fr; /* Uma coluna no mobile */
            gap: 2rem;
        }

        /* Caixa de informações principal */
        .curso-info-box {
            background-color: var(--cor-branco);
            padding: 1.5rem;
            border-radius: var(--borda-radius);
            box-shadow: var(--sombra-card);
        }

        .curso-info-box img {
            width: 100%;
            border-radius: var(--borda-radius);
            margin-bottom: 1.5rem;
        }

        .info-box-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem 0;
            border-bottom: 1px solid #eee;
        }
        .info-box-item:last-child {
            border-bottom: none;
        }
        .info-box-item svg {
            fill: var(--cor-principal);
        }
        
        .btn-inscricao {
            display: block;
            width: 100%;
            background-color: var(--cor-principal);
            color: var(--cor-branco);
            text-align: center;
            padding: 1rem;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: var(--borda-radius);
            margin-top: 1.5rem;
            transition: background-color 0.3s ease;
        }
        .btn-inscricao:hover {
            background-color: var(--cor-secundaria);
        }
        
        /* Conteúdo detalhado do curso */
        .curso-conteudo .curso-secao-detalhada {
            background-color: var(--cor-branco);
            padding: 2rem;
            border-radius: var(--borda-radius);
            box-shadow: var(--sombra-card);
            margin-bottom: 2rem;
        }

        .curso-conteudo h2 {
            font-size: 1.8rem;
            color: var(--cor-secundaria);
            margin-bottom: 1rem;
        }

        .curso-conteudo p, .curso-conteudo li {
            font-size: 1rem;
            line-height: 1.8;
            color: #555;
        }

        .curso-conteudo ul {
            list-style: none;
            padding-left: 0;
        }
        .curso-conteudo ul li {
            padding-left: 1.75rem;
            position: relative;
            margin-bottom: 0.75rem;
        }
        .curso-conteudo ul li::before {
            content: '🎵';
            color: var(--cor-principal);
            position: absolute;
            left: 0;
            font-size: 1.2rem;
        }

        .instructor-card {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            background-color: var(--cor-fundo);
            padding: 1.5rem;
            border-radius: var(--borda-radius);
            margin-top: 1.5rem;
        }
        .instructor-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }
        .instructor-card h4 {
            margin-bottom: 0.25rem;
            font-size: 1.2rem;
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
            main { padding-top: 120px; } /* Aumenta o espaço para o título */
            .main-container { padding: 2rem; }

            .curso-detalhe-grid {
                grid-template-columns: 350px 1fr; /* Coluna da esquerda fixa, direita flexível */
                align-items: flex-start;
            }

            /* Efeito de "sidebar fixa" */
            .curso-info-box {
                position: sticky;
                top: 120px; /* Distância do topo = padding-top do main */
            }
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
            <header class="curso-header">
                <h1>Curso de Iniciação Musical</h1>
                <p>O primeiro passo para a sua jornada no mundo da música.</p>
            </header>

            <div class="curso-detalhe-grid">
                <aside class="curso-info-box">
                    <img src="https://placehold.co/600x400/8a2be2/FFF?text=Iniciação+Musical" alt="Aula de iniciação musical na Casa do Piano">
                    
                    <div class="info-box-item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                        <div><strong>Duração:</strong> 6 meses</div>
                    </div>
                    <div class="info-box-item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H8V4h12v12zM12 5.5v9l6-4.5z"/></svg>
                        <div><strong>Modalidade:</strong> Presencial e EAD</div>
                    </div>
                    <div class="info-box-item">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px"><g><rect fill="none" height="24" width="24"/></g><g><path d="M23,12l-2.44-2.79l0.34-3.69l-3.61-0.82L15.4,1.44L12,2.83L8.6,1.44L6.71,4.7L3.1,5.52l0.34,3.69L1,12l2.44,2.79 l-0.34,3.69l3.61,0.82L8.6,22.56L12,21.17l3.4,1.39l1.89-3.26l3.61-0.82l-0.34-3.69L23,12z M10.36,16.64l-3.23-3.23l1.41-1.41 l1.82,1.82l4.24-4.24l1.41,1.41L10.36,16.64z"/></g></svg>
                        <div><strong>Nível:</strong> Iniciante</div>
                    </div>

                    <a href="resources/views/sobre.blade.php" target="_blank" class="btn-inscricao">Inscreva-se pelo WhatsApp</a>
                </aside>

                <div class="curso-conteudo">
                    <section class="curso-secao-detalhada">
                        <h2>Sobre o Curso</h2>
                        <p>Nosso Curso de Iniciação Musical é a porta de entrada para o maravilhoso mundo da música. Projetado para alunos sem nenhum conhecimento prévio, este curso foca em construir uma base técnica e teórica sólida de forma divertida e motivadora. Aqui, você não apenas aprende a tocar, mas também a sentir e a compreender a linguagem universal dos sons.</p>
                    </section>

                    <section class="curso-secao-detalhada">
                        <h2>O que você vai aprender:</h2>
                        <ul>
                            <li><strong>Teoria Fundamental:</strong> Entenda notas, pausas, claves e ritmo de uma maneira simples e prática.</li>
                            <li><strong>Técnica Instrumental:</strong> Desenvolva a postura correta, a coordenação motora e a digitação inicial para seu instrumento.</li>
                            <li><strong>Leitura de Partitura:</strong> Dê os primeiros passos para decifrar partituras e ganhar autonomia nos estudos.</li>
                            <li><strong>Repertório Inicial:</strong> Toque suas primeiras músicas, com arranjos pensados para o seu nível, garantindo progresso e motivação.</li>
                            <li><strong>Percepção Auditiva:</strong> Treine seu ouvido para reconhecer notas e melodias simples.</li>
                        </ul>
                    </section>

                    <section class="curso-secao-detalhada">
                        <h2>Para quem é este curso?</h2>
                        <p>Este curso é perfeito para crianças a partir de 7 anos, jovens e adultos que sempre sonharam em aprender um instrumento mas nunca souberam por onde começar. Se você busca um hobby relaxante, uma nova habilidade ou o início de uma carreira musical, este é o seu ponto de partida.</p>
                    </section>
                    
                     <section class="curso-secao-detalhada">
                        <h2>Conheça seu Professor</h2>
                        <div class="instructor-card">
                            <img src="https://placehold.co/160x160/f4f4f9/333?text=Professor(a)" alt="Foto do professor">
                            <div>
                                <h4>Maestro João Silva</h4>
                                <p>Com mais de 20 anos de experiência, o Maestro João é especialista em iniciação musical e apaixonado por revelar novos talentos.</p>
                            </div>
                        </div>
                    </section>
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