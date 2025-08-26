<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Violão Clássico Acústico - Casa do Piano</title>

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
            padding: 1rem;
            background-color: var(--cor-branco);
            border-radius: var(--borda-radius);
            box-shadow: var(--sombra-card);
        }

        /* ✨✨✨ NOVOS ESTILOS PARA A PÁGINA DE PRODUTO ✨✨✨ */

        .produto-detalhe-container {
            display: grid;
            grid-template-columns: 1fr; /* Uma coluna no mobile */
            gap: 2rem;
        }

        .imagem-principal img {
            width: 100%;
            aspect-ratio: 1 / 1;
            object-fit: cover;
            border-radius: var(--borda-radius);
            border: 1px solid #eee;
        }

        .galeria-thumbnails {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .thumbnail {
            flex: 1;
            border: 2px solid transparent;
            border-radius: var(--borda-radius);
            overflow: hidden;
            cursor: pointer;
            transition: border-color 0.3s ease;
        }

        .thumbnail.active {
            border-color: var(--cor-principal);
        }

        .thumbnail img {
            width: 100%;
            aspect-ratio: 1 / 1;
            object-fit: cover;
        }
        
        .produto-titulo {
            font-size: 2.5rem;
            font-weight: 600;
            color: var(--cor-secundaria);
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        .produto-preco {
            font-size: 2rem;
            font-weight: 700;
            color: var(--cor-principal);
            margin-bottom: 1.5rem;
        }

        .produto-descricao-curta {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
            margin-bottom: 2rem;
        }
        
        .btn-comprar {
            display: block;
            width: 100%;
            background-color: var(--cor-principal);
            color: var(--cor-branco);
            text-align: center;
            padding: 1rem;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: var(--borda-radius);
            margin-bottom: 2rem;
            transition: background-color 0.3s ease;
        }
        .btn-comprar:hover {
            background-color: var(--cor-secundaria);
        }
        
        .produto-descricao-detalhada h3 {
            font-size: 1.5rem;
            color: var(--cor-secundaria);
            border-top: 1px solid #eee;
            padding-top: 1.5rem;
        }

        .produto-descricao-detalhada ul {
            list-style: disc;
            padding-left: 1.5rem;
            margin-top: 1rem;
            color: #666;
            line-height: 1.8;
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
            
            .produto-detalhe-container {
                grid-template-columns: 1fr 1fr; /* Duas colunas no desktop */
                gap: 3rem;
            }
        }
    </style>
</head>

<body>

    <nav class="menu-lateral">
        <div class="menu-lateral-cabecalho">
            <a href="{{ route('inicial') }}" class="logo-link"><img src="logo_casa_do_piano.jpeg" alt="Logo Casa do Piano" class="logo"><span class="logo-texto">Casa do Piano</span></a>
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
            <div class="produto-detalhe-container">
                <div class="produto-galeria">
                    <div class="imagem-principal">
                        <img id="imagem-principal-produto" src="{{ asset('imagens/violaolaranja.jpeg') }}" alt="Violão Clássico Acústico - Vista frontal">
                    </div>
                    <div class="galeria-thumbnails">
                        <div class="thumbnail active">
                            <img src="{{ asset('imagens/violaolaranja.jpeg') }}" alt="Miniatura da vista frontal do violão">
                        </div>
                        <div class="thumbnail">
                            <img src="https://placehold.co/400x400/f4f4f9/333?text=Violão+(Detalhe)" alt="Miniatura de detalhe do violão">
                        </div>
                        <div class="thumbnail">
                            <img src="https://placehold.co/400x400/f4f4f9/333?text=Violão+(Costas)" alt="Miniatura da vista traseira do violão">
                        </div>
                    </div>
                </div>

                <div class="produto-info">
                    <h1 class="produto-titulo">Violão Clássico Acústico</h1>
                    <p class="produto-preco">R$ 459,00</p>
                    <p class="produto-descricao-curta">
                        Perfeito para iniciantes e estudantes, este violão clássico oferece um som equilibrado e conforto ao tocar. Construído com materiais de qualidade para garantir durabilidade e uma ótima experiência musical.
                    </p>
                    <a href="https://wa.me/5584987379538" target="_blank" class="btn-comprar">Comprar pelo WhatsApp</a>
                    <div class="produto-descricao-detalhada">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                            <li><strong>Tipo:</strong> Clássico Acústico</li>
                            <li><strong>Cordas:</strong> Nylon</li>
                            <li><strong>Tampo:</strong> Linden</li>
                            <li><strong>Cor:</strong> Natural</li>
                            <li><strong>Acabamento:</strong> Verniz brilhante</li>
                        </ul>
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
        // Script do menu lateral (padrão)
        document.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.querySelector('.menu-btn');
            const fecharMenuBtn = document.querySelector('#fechar-menu-btn');
            const menuLateral = document.querySelector('.menu-lateral');
            if (menuBtn && menuLateral) { menuBtn.addEventListener('click', () => { menuLateral.classList.add('aberto'); }); }
            if (fecharMenuBtn && menuLateral) { fecharMenuBtn.addEventListener('click', () => { menuLateral.classList.remove('aberto'); }); }
        });

        // Script para a galeria da página de produto
        const imagemPrincipal = document.getElementById('imagem-principal-produto');
        const thumbnails = document.querySelectorAll('.thumbnail');

        thumbnails.forEach(thumb => {
            thumb.addEventListener('click', function() {
                // Remove a classe 'active' de todas as miniaturas
                thumbnails.forEach(item => item.classList.remove('active'));
                
                // Adiciona a classe 'active' à miniatura clicada
                this.classList.add('active');
                
                // Troca a imagem principal pela imagem da miniatura clicada
                const novaImagemSrc = this.querySelector('img').src;
                imagemPrincipal.src = novaImagemSrc;
            });
        });
    </script>
</body>

</html>