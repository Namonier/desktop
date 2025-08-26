<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Casa do Piano - Agenda Cultural</title>

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

        img {
            max-width: 100%;
            display: block;
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

        /* ✨✨✨ NOVOS ESTILOS PARA A PÁGINA DA AGENDA ✨✨✨ */

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

        /* Container da lista de eventos */
        .agenda-lista {
            display: flex;
            flex-direction: column;
            gap: 1.5rem; /* Espaço entre os cards de evento */
        }
        
        /* Card de um evento individual */
        .evento-card {
            display: flex;
            flex-direction: column; /* Em telas pequenas, a data fica em cima */
            background-color: var(--cor-branco);
            border-radius: var(--borda-radius);
            box-shadow: var(--sombra-card);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .evento-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Seção da data do evento */
        .evento-data {
            background-color: var(--cor-principal);
            color: var(--cor-branco);
            text-align: center;
            padding: 1.5rem 1rem;
        }
        
        .evento-data .dia {
            font-size: 3rem;
            font-weight: 600;
            line-height: 1;
        }

        .evento-data .mes {
            font-size: 1.2rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Seção de informações do evento */
        .evento-info {
            padding: 1.5rem;
            flex: 1; /* Faz com que esta seção ocupe o espaço restante */
        }

        .evento-info h3 {
            font-size: 1.75rem;
            color: var(--cor-secundaria);
            margin-bottom: 0.75rem;
        }
        
        .evento-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            color: #666;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        .evento-meta span {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .evento-descricao {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .evento-btn {
            display: inline-block;
            background-color: var(--cor-principal);
            color: var(--cor-branco);
            padding: 0.75rem 1.5rem;
            border-radius: var(--borda-radius);
            font-weight: 500;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        
        .evento-btn:hover {
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
            .menu-lateral ul li:first-child a { margin-left: 1.7rem; } /* Espaçamento padrão do menu */
            .menu-lateral ul a:hover { background-color: transparent; color: var(--cor-principal); }
            main { padding-top: 100px; }
            .main-container { padding: 2rem; }
            
            /* Ajustes da agenda para desktop */
            .evento-card {
                flex-direction: row; /* Em telas grandes, a data fica ao lado das informações */
            }

            .evento-data {
                flex-basis: 200px; /* Largura fixa para a seção da data */
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
                <h1>Agenda Cultural</h1>
                <p>Confira nossos próximos eventos e participe!</p>
            </div>

            <div class="agenda-lista">

                <div class="evento-card">
                    <div class="evento-data">
                        <span class="dia">15</span>
                        <span class="mes">Setembro</span>
                    </div>
                    <div class="evento-info">
                        <h3>Recital de Piano Clássico</h3>
                        <div class="evento-meta">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px" fill="#666"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.5 14H8c-.55 0-1-.45-1-1s.45-1 1-1h8.5c.55 0 1 .45 1 1s-.45 1-1 1z"/></svg>
                                19:30
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px" fill="#666"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg>
                                Auditório Principal
                            </span>
                        </div>
                        <p class="evento-descricao">Uma noite dedicada aos grandes mestres do piano, com apresentações de nossos professores e alunos avançados. Obras de Chopin, Beethoven e Mozart.</p>
                        <a href="{{ route('agendadescricao') }}" class="evento-btn">Mais Informações</a>
                    </div>
                </div>

                <div class="evento-card">
                    <div class="evento-data">
                        <span class="dia">28</span>
                        <span class="mes">Setembro</span>
                    </div>
                    <div class="evento-info">
                        <h3>Workshop de Composição</h3>
                        <div class="evento-meta">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px" fill="#666"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.5 14H8c-.55 0-1-.45-1-1s.45-1 1-1h8.5c.55 0 1 .45 1 1s-.45 1-1 1z"/></svg>
                                14:00 - 18:00
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px" fill="#666"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg>
                                Sala de Estudos
                            </span>
                        </div>
                        <p class="evento-descricao">Aprenda os fundamentos da criação musical, desde a melodia até a harmonia. Vagas limitadas, ideal para iniciantes e intermediários.</p>
                        <a href="{{ route('agendadescricao') }}" class="evento-btn">Inscreva-se</a>
                    </div>
                </div>

                <div class="evento-card">
                    <div class="evento-data">
                        <span class="dia">05</span>
                        <span class="mes">Outubro</span>
                    </div>
                    <div class="evento-info">
                        <h3>Apresentação de Alunos</h3>
                        <div class="evento-meta">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px" fill="#666"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.5 14H8c-.55 0-1-.45-1-1s.45-1 1-1h8.5c.55 0 1 .45 1 1s-.45 1-1 1z"/></svg>
                                16:00
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px" fill="#666"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg>
                                Auditório Principal
                            </span>
                        </div>
                        <p class="evento-descricao">Venha prestigiar o talento e a dedicação dos nossos alunos em um recital emocionante com repertório variado. Entrada franca.</p>
                        <a href="{{ route('agendadescricao') }}" class="evento-btn">Saiba Mais</a>
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