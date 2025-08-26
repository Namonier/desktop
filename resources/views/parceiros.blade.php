<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Casa do Piano - Parceiros</title>

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

        /* ✨✨✨ NOVOS ESTILOS PARA A PÁGINA DE PARCEIROS ✨✨✨ */

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

        /* Grid para os cards de parceiros */
        .parceiros-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }
        
        /* Card de parceiro individual */
        .parceiro-card {
            background-color: var(--cor-branco);
            border-radius: var(--borda-radius);
            box-shadow: var(--sombra-card);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .parceiro-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Container do logo para padronizar tamanhos */
        .parceiro-logo {
            background-color: #fdfdff; /* Fundo levemente diferente para logos com transparência */
            padding: 1.5rem;
            aspect-ratio: 16 / 9; /* Proporção para logos */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .parceiro-logo img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain; /* Garante que o logo apareça inteiro, sem cortar */
        }
        
        .parceiro-info {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1; /* Faz com que esta área cresça, alinhando os botões */
        }

        .parceiro-info h3 {
            font-size: 1.5rem;
            color: var(--cor-secundaria);
            margin-bottom: 0.75rem;
        }
        
        .parceiro-info p {
            font-size: 1rem;
            line-height: 1.6;
            color: #666;
            flex-grow: 1;
            margin-bottom: 1.5rem;
        }
        
        .parceiro-btn {
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
        
        .parceiro-btn:hover {
            background-color: var(--cor-secundaria);
        }

        /* Seção de Chamada para Ação */
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
            background-color: #9d4edd;
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
                <h1>Nossos Parceiros</h1>
                <p>Juntos, fortalecemos a cena cultural e musical de Mossoró.</p>
            </div>

            <div class="parceiros-grid">

                <div class="parceiro-card">
                    <div class="parceiro-logo">
                        <img src="https://placehold.co/400x225/8a2be2/FFF?text=Luteria+Silva" alt="Logo da Luteria Artesanal Silva">
                    </div>
                    <div class="parceiro-info">
                        <h3>Luteria Artesanal Silva</h3>
                        <p>Nosso parceiro oficial para reparos, manutenção e customização de instrumentos de corda, garantindo a melhor qualidade para nossos clientes e alunos.</p>
                        <a href="#" class="parceiro-btn">Visitar Site</a>
                    </div>
                </div>

                <div class="parceiro-card">
                    <div class="parceiro-logo">
                        <img src="https://placehold.co/400x225/4b0082/FFF?text=Som+Puro" alt="Logo do Estúdio de Gravação Som Puro">
                    </div>
                    <div class="parceiro-info">
                        <h3>Estúdio de Gravação Som Puro</h3>
                        <p>O local onde nossos alunos e artistas locais podem gravar suas músicas com qualidade profissional. Oferecem descontos especiais para a comunidade da Casa do Piano.</p>
                        <a href="#" class="parceiro-btn">Visitar Site</a>
                    </div>
                </div>

                <div class="parceiro-card">
                    <div class="parceiro-logo">
                        <img src="https://placehold.co/400x225/8a2be2/FFF?text=Café+Melodia" alt="Logo do Café Cultural Melodia">
                    </div>
                    <div class="parceiro-info">
                        <h3>Café Cultural Melodia</h3>
                        <p>Um espaço aconchegante que sedia nossos recitais menores e saraus, unindo a paixão pelo café com o amor pela música ao vivo.</p>
                        <a href="#" class="parceiro-btn">Visitar Site</a>
                    </div>
                </div>

            </div>
            
            <section class="cta-secao">
                <h2>Quer ser nosso parceiro?</h2>
                <p>Se sua empresa compartilha da nossa paixão pela cultura e pela música, entre em contato e vamos conversar sobre como podemos colaborar.</p>
                <a href="mailto:casadopianomossoro@gmail.com" class="cta-botao">Entre em Contato</a>
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