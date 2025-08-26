<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Recital de Piano Clássico - Casa do Piano</title>

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
            max-width: 900px; /* Layout mais estreito, ideal para leitura */
            margin: 0 auto;
        }

        /* ✨✨✨ NOVOS ESTILOS PARA A PÁGINA DE EVENTO ✨✨✨ */
        
        .evento-banner img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: var(--borda-radius);
            margin-bottom: 2rem;
            box-shadow: var(--sombra-card);
        }

        .evento-header h1 {
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--cor-secundaria);
            line-height: 1.2;
            text-align: center;
        }

        .evento-meta-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.5rem 3rem;
            margin: 2rem 0;
            padding: 1.5rem 0;
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 1rem;
            color: #333;
        }

        .meta-item svg {
            fill: var(--cor-principal);
        }
        
        .evento-conteudo {
            background-color: var(--cor-branco);
            padding: 2rem;
            border-radius: var(--borda-radius);
            box-shadow: var(--sombra-card);
            margin-top: 2rem;
        }

        .evento-conteudo h2 {
            font-size: 1.8rem;
            color: var(--cor-secundaria);
            margin-bottom: 1rem;
            border-bottom: 2px solid var(--cor-principal);
            padding-bottom: 0.5rem;
            display: inline-block;
        }

        .evento-conteudo p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 1.5rem;
        }
        
        .evento-mapa {
            overflow: hidden;
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9;
            border-radius: var(--borda-radius);
            border: 1px solid #ddd;
        }
        .evento-mapa iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .btn-container {
            text-align: center;
            margin: 2rem 0;
        }
        
        .btn-ingresso {
            display: inline-block;
            background-color: var(--cor-principal);
            color: var(--cor-branco);
            padding: 1rem 3rem;
            border-radius: 50px; /* Botão arredondado */
            font-size: 1.2rem;
            font-weight: 600;
            text-transform: uppercase;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        
        .btn-ingresso:hover {
            background-color: var(--cor-secundaria);
            transform: scale(1.05);
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
            .menu-lateral ul li:first-child a { margin-left: 1.7rem; }
            .menu-lateral ul a:hover { background-color: transparent; color: var(--cor-principal); }
            main { padding-top: 120px; }
            .main-container { padding: 2rem; }
            .evento-banner img { height: 400px; }
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
        <a href="{{ route('inicial') }}" class="logo-link-mobile" aria-label="Voltar para a página inicial"><img src="logo_casa_do_piano.jpeg" alt="Logo da Casa do Piano" class="logo"></a>
    </header>

    <main>
        <div class="main-container">
            <article>
                <div class="evento-banner">
                    <img src="https://placehold.co/1200x400/4b0082/FFF?text=Recital+de+Piano" alt="Banner do Recital de Piano Clássico">
                </div>
                
                <header class="evento-header">
                    <h1>Recital de Piano Clássico</h1>
                </header>

                <div class="evento-meta-info">
                    <div class="meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zM9 14H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z"/></svg>
                        <span>15 de Setembro de 2025</span>
                    </div>
                    <div class="meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                        <span>19:30</span>
                    </div>
                    <div class="meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg>
                        <span>Auditório da Casa do Piano</span>
                    </div>
                     <div class="meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 10V6c0-1.11-.9-2-2-2H4c-1.1 0-2 .89-2 2v4c1.1 0 2 .89 2 2s-.9 2-2 2v4c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-4c-1.1 0-2-.89-2-2s.9-2 2-2zm-2-2.83L15.17 12 20 16.83V7.17zM4 18V6h11.17L10.34 12l4.83 6H4z"/></svg>
                        <span>Entrada: R$ 30,00</span>
                    </div>
                </div>

                <div class="btn-container">
                    <a href="https://wa.me/5584991234567?text=Olá!%20Gostaria%20de%20reservar%20um%20ingresso%20para%20o%20Recital%20de%20Piano%20Clássico." target="_blank" class="btn-ingresso">Comprar Ingresso</a>
                </div>

                <div class="evento-conteudo">
                    <section>
                        <h2>Sobre o Evento</h2>
                        <p>A Casa do Piano tem o prazer de apresentar uma noite inesquecível dedicada aos grandes mestres da música clássica. O recital contará com a performance do aclamado pianista convidado, que apresentará um repertório cuidadosamente selecionado, incluindo obras de Chopin, Beethoven e Mozart. Uma experiência emocionante e inspiradora para todos os amantes da boa música.</p>
                    </section>
                    
                    <section>
                        <h2>Localização</h2>
                        <p>O evento ocorrerá em nosso auditório principal, localizado em nossa sede. Veja o mapa abaixo para encontrar o caminho.</p>
                        <div class="evento-mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!4v1756085458202!6m8!1m7!1szjnTwN9gC3Hm-IPiK1vctQ!2m2!1d-5.169531382106174!2d-37.36253883003268!3f358.2217240912843!4f-11.8744043185892!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </section>
                </div>
            </article>
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