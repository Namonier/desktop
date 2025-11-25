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
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>

        /* Estilos para o botão de voltar */
        #fechar-menu-btn {
            /* Define a largura e altura do botão */
            width: 35px;
            height: 35px;

            /* Opcional: Centraliza a imagem se ela for menor que o botão */
            display: flex;
            justify-content: center;
            align-items: center;

            /* Estilos básicos para o botão (você pode ajustar ou remover) */
            background-color: transparent; /* Fundo transparente */
            border: none; /* Sem borda */
            padding: 0; /* Remove padding padrão */
            cursor: pointer; /* Indica que é clicável */
            border-radius: 5px; /* Bordas levemente arredondadas */
            /* Você pode adicionar um 'hover' para feedback visual: */
            /* &:hover {
                background-color: rgba(0, 0, 0, 0.1);
            } */
        }

        /* Estilos para a imagem dentro do botão */
        #fechar-menu-btn img {
            /* Define a largura e altura da imagem para preencher o botão */
            width: 100%; /* Faz a imagem ocupar 100% da largura do botão */
            height: 100%; /* Faz a imagem ocupar 100% da altura do botão */
            object-fit: contain; /* Garante que a imagem se ajuste sem cortar ou esticar */
            /* Se a imagem for muito pequena e você quiser que ela tenha um tamanho fixo menor que o botão: */
            /* width: 20px;
            height: 20px; */
        }
        
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
        .logo { width: 55px; height: 55px; border-radius: 50%; }
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
            .menu-lateral ul a { padding: 0.5rem 1rem; font-weight: 500; transition: color 0.3s ease, transform 0.3s ease; }
            .menu-lateral ul li:first-child a { margin-left: 1rem; }
            .menu-lateral ul a:hover { background-color: transparent; color: var(--cor-principal); transform: scale(1.1); }
            main { padding-top: 100px; }
            .menu-ativo{
                background-color: #8A2BE2;
                color: white;
                border-color: #8A2BE2;
                transform: scale(0.95);
            }
            .main-container { padding: 2rem; }
        }


    </style>
    {{ $styles ?? '' }}
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @livewireStyles
    @stack('styles')

</head>
<body>
    
    <x-menu />

    <main>
        {{ $slot }}
    </main>

    <footer class="rodape">
        <p><strong>Casa do Piano - Mossoró</strong></p>
        <p>Rua Joaquim Bruno Mota, 58 Bairro Abolição, Mossoró</p>
        <p>Email: casadopianomossoro@gmail.com</p>
        <p>WhatsApp: (84) 98737-9538</p>
    </footer>

    <script>
    function menujs(){
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

    // Lightbox elementos (globais)
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const fecharLightbox = document.getElementById('fechar-lightbox');

    // Fecha lightbox
    if (fecharLightbox) fecharLightbox.addEventListener('click', () => { if (lightbox) lightbox.style.display = 'none'; });
    if (lightbox) lightbox.addEventListener('click', (e) => { if (e.target === lightbox) lightbox.style.display = 'none'; });

    // Para cada carrossel na página
    document.querySelectorAll('.carrossel').forEach(carrossel => {
        const slides = carrossel.querySelector('.slides');
        if (!slides) return;

        // imagens originais
        const origImgs = Array.from(slides.querySelectorAll('img'));
        if (origImgs.length === 0) return;

        // Clonar primeira e última e inserir nas pontas
        const firstClone = origImgs[0].cloneNode(true);
        const lastClone = origImgs[origImgs.length - 1].cloneNode(true);
        slides.appendChild(firstClone);
        slides.insertBefore(lastClone, slides.firstChild);

        // Re-obter lista de imagens (agora com clones)
        let imgs = Array.from(slides.querySelectorAll('img'));

        // Certificar que cada img ocupa 100% (em caso do CSS não ter sido aplicado)
        imgs.forEach(img => img.style.flex = '0 0 100%');

        // Estado
        let index = 1; // começamos na primeira imagem real (depois do lastClone)
        let isTransitioning = false;

        // Ajusta posição inicial
        slides.style.transition = 'none';
        slides.style.transform = `translateX(${-index * 100}%)`;
        // forçar reflow
        slides.getBoundingClientRect();
        slides.style.transition = 'transform 0.6s ease-in-out';

        // Navegação (botões)
        const btnPrev = carrossel.querySelector('.anterior');
        const btnNext = carrossel.querySelector('.proximo');

        function goTo(i) {
        if (isTransitioning) return;
        isTransitioning = true;
        index = i;
        slides.style.transition = 'transform 0.6s ease-in-out';
        slides.style.transform = `translateX(${-index * 100}%)`;
        }

        if (btnNext) btnNext.addEventListener('click', () => goTo(index + 1));
        if (btnPrev) btnPrev.addEventListener('click', () => goTo(index - 1));

        // Quando a transição termina, verificar clones e saltar "sem animação" para o slide real
        slides.addEventListener('transitionend', () => {
        isTransitioning = false;
        if (index >= imgs.length - 1) { // chegou no clone da primeira imagem
            index = 1;
            slides.style.transition = 'none';
            slides.style.transform = `translateX(${-index * 100}%)`;
            slides.getBoundingClientRect(); // reflow
            slides.style.transition = 'transform 0.6s ease-in-out';
        } else if (index <= 0) { // chegou no clone da última imagem
            index = imgs.length - 2;
            slides.style.transition = 'none';
            slides.style.transform = `translateX(${-index * 100}%)`;
            slides.getBoundingClientRect();
            slides.style.transition = 'transform 0.6s ease-in-out';
        }
        });

        // Autoplay / loop
        let autoplay = setInterval(() => { goTo(index + 1); }, 4000);

        // Pausa ao passar o mouse e retoma ao sair
        carrossel.addEventListener('mouseenter', () => clearInterval(autoplay));
        carrossel.addEventListener('mouseleave', () => { autoplay = setInterval(() => goTo(index + 1), 4000); });

        // REAPLICA o evento de clique para lightbox em todas as imagens (incluindo clones)
        imgs.forEach(img => {
        img.addEventListener('click', () => {
            if (!lightbox || !lightboxImg) return;
            lightboxImg.src = img.src;
            lightbox.style.display = 'block';
        });
        });
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const lightboxDescricao = document.getElementById('lightbox-descricao');
        const fecharLightbox = document.getElementById('fechar-lightbox');

        imgs.forEach(img => {
        img.addEventListener('click', () => {
            if (!lightbox || !lightboxImg) return;
            lightboxImg.src = img.src;
            lightbox.style.display = 'block';
            
            // pega descrição
            const descricao = img.getAttribute('data-descricao') || img.alt || '';
            lightboxDescricao.textContent = descricao;
        });
        });
    });

    // ===== SELETOR DE MÊS E ANO =====
    const seletorForm = document.getElementById('seletorForm');
    const inputMesAno = document.getElementById('mesAnoInput');
    const resultadoP = document.getElementById('resultado');

    seletorForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const valorSelecionado = inputMesAno.value;

        if (!valorSelecionado) {
            resultadoP.textContent = 'Por favor, selecione um mês e ano.';
            resultadoP.style.color = '#dc3545';
            return;
        }

        const [ano, mes] = valorSelecionado.split('-');
        const nomesDosMeses = [
            'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho',
            'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
        ];
        const nomeMes = nomesDosMeses[parseInt(mes) - 1];

        resultadoP.textContent = `Você selecionou: ${nomeMes} de ${ano}`;
        resultadoP.style.color = '#28a745';
    });
    }        
document.addEventListener('DOMContentLoaded', () => {
    menujs();
});
    </script>


    @livewireScripts
</body>

</html>