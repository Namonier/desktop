<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Casa do Piano - Serviços</title>

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

        /* ✨✨✨ NOVOS ESTILOS PARA A PÁGINA DE SERVIÇOS ✨✨✨ */

        .pagina-cabecalho {
            text-align: center;
            margin-bottom: 2rem;
            padding: 2rem 1rem;
            background-color: var(--cor-branco);
            border-radius: var(--borda-radius);
            box-shadow: var(--sombra-card);
        }

        .servico-card {
            /* Transforma o card em um contêiner flexível */
            display: flex;
            /* Empilha os itens um em cima do outro (verticalmente) */
            flex-direction: column;
            /* ✅ Centraliza todos os itens horizontalmente */
            align-items: center;
          
            /* Opcional: Centraliza também o texto do h3 e p */
            text-align: center;
          
            /* Estilos adicionais para melhorar a aparência do card */
            border: 1px solid #e0e0e0;
            border-radius: 8px;
        }
          
        .servico-icone img {
        /* Opcional: Define um tamanho para o ícone */
            width: 50px;
            height: 50px;
            margin-bottom: 16px; /* Adiciona um espaço abaixo do ícone */
        }
        .pagina-cabecalho h1 {
            color: var(--cor-secundaria);
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        /* Grid para os cards de serviço */
        .servicos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        /* Card de serviço individual */
        .servico-card {
            background-color: var(--cor-branco);
            border-radius: var(--borda-radius);
            box-shadow: var(--sombra-card);
            padding: 2rem;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .servico-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .servico-icone {
            margin-bottom: 1rem;
        }

        .servico-icone svg {
            width: 60px;
            height: 60px;
            fill: var(--cor-principal); /* Cor do ícone */
        }
        
        .servico-card h3 {
            font-size: 1.5rem;
            color: var(--cor-secundaria);
            margin-bottom: 0.75rem;
        }

        .servico-card p {
            font-size: 1rem;
            line-height: 1.6;
            color: #666;
        }
        
        /* Seção de Chamada para Ação (Call to Action) */
        .cta-secao {
            background-color: var(--cor-secundaria);
            color: var(--cor-branco);
            text-align: center;
            padding: 3rem 1.5rem;
            border-radius: var(--borda-radius);
        }

        .cta-secao h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        
        .cta-botao {
            display: inline-block;
            background-color: var(--cor-principal);
            color: var(--cor-branco);
            padding: 1rem 2rem;
            border-radius: var(--borda-radius);
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            margin-top: 1rem;
            transition: background-color 0.3s ease;
        }

        .cta-botao:hover {
            background-color: #9d4edd; /* Um tom mais claro de roxo */
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
                <h1>Nossos Serviços</h1>
                <p>Música e elegância para todos os momentos.</p>
            </div>

            <div class="servicos-grid">

                <div class="servico-card">
                    <div class="servico-icone">
                        <img src="{{ asset('imagens/icon-agenda.png') }}" alt="imagem do icone da agenda" >
                    </div>
                    <h3>Eventos Sociais e Culturais</h3>
                    <p>Levamos a trilha sonora perfeita para casamentos, aniversários, recepções e aberturas culturais, criando uma atmosfera única e memorável.</p>
                </div>

                <div class="servico-card">
                    <div class="servico-icone">
                        <img src="{{ asset('imagens/icon-nota-musical.png') }}" alt="Imagem do icone da nota musical" >
                    </div>
                    <h3>Soluções Musicais</h3>
                    <p>Oferecemos trilha sonora para cerimônias e música para recepções com formações diversas: músicos solo, duos, trios ou quartetos.</p>
                </div>
                
                <div class="servico-card">
                    <div class="servico-icone">
                        <img src="{{ asset('imagens/icon-piano.png') }}" alt="Imagem do icone do piano" >
                    </div>
                    <h3>Locação de Piano de Cauda</h3>
                    <p>Adicione um toque de classe ao seu evento com a locação de um piano acústico de cauda. Inclui frete e montagem completa no local.</p>
                </div>

            </div>

            <section class="cta-secao">
                <h2>Pronto para adicionar música ao seu evento?</h2>
                <p>Entre em contato conosco para um orçamento personalizado e sem compromisso.</p>
                <a href="https://wa.me/5584987379538" class="cta-botao">Solicitar Orçamento</a>
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