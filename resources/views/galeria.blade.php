<x-layout>
    <x-slot:styles>
        <style>

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

            /* O container do grid */
            .galeria-grid {
                display: grid;
                /* Cria colunas responsivas: o navegador tentará criar colunas de 280px e as distribuirá igualmente */
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                gap: 1rem;
                /* Espaço entre as fotos */
            }

            /* O item da galeria (cada foto) */
            .galeria-item {
                border-radius: var(--borda-radius);
                overflow: hidden;
                /* Garante que a imagem não ultrapasse as bordas arredondadas */
                box-shadow: var(--sombra-card);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                cursor: pointer; /* Adicionado para indicar que a imagem é clicável */

                /* Correção principal: Força o item a ser um quadrado perfeito, o que estabiliza o grid */
                aspect-ratio: 1 / 1;
            }

            .galeria-item:hover {
                transform: scale(1.03);
                /* Efeito de zoom mais sutil */
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            }

            /* A imagem dentro do item */
            .galeria-item img {
                width: 100%;
                height: 100%;
                /* Cobre todo o espaço do container sem distorcer a imagem (pode cortar um pouco) */
                object-fit: cover;
            }

                        /* Adiciona um cursor de "mãozinha" para indicar que as imagens são clicáveis */
            .slide {
                cursor: pointer;
            }

            .carrossel {
                position: relative;
                max-width: 600px; /* Aumenta o tamanho do carrossel */
                margin: 40px auto;
                overflow: hidden;
                border-radius: 15px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
                background-color: #fff;
            }

            /* Mantém as imagens na horizontal e com proporção certa */
            .slides {
                display: flex;
                transition: transform 0.6s ease-in-out;
                /* evita que as imagens quebrem linha */
                flex-wrap: nowrap;
            }

            .slides img {
                flex: 0 0 100%;    /* cada imagem ocupa 100% da largura do carrossel */
                width: 100%;
                height: auto;      /* mantém proporção */
                max-height: 400px;      /* <<< define a altura máxima */
                object-fit: cover;  /* preenche o espaço sem distorcer */
                border-radius: 15px;
                cursor: pointer;
                transition: transform 0.3s ease;
            }

            .slides img:hover {
                transform: scale(1.03);
            }

            @media (max-width: 768px) {
            .slides img {
                max-height: 250px;
            }
            }

            /* Botões */
            .anterior,
            .proximo {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                background-color: rgba(0, 0, 0, 0.5);
                color: white;
                border: none;
                padding: 10px 15px;
                cursor: pointer;
                border-radius: 50%;
                font-size: 18px;
            }

            .anterior:hover,
            .proximo:hover {
                background-color: rgba(0, 0, 0, 0.8);
            }

            .anterior {
            left: 10px;
            }

            .proximo {
                right: 10px;
            }
            
            /* --- Lightbox (ampliação da imagem) --- */
            .lightbox {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            }

            .lightbox-conteudo {
            margin: auto;
            display: block;
            max-width: 90%;
            max-height: 80vh;
            border-radius: 10px;
            animation: zoom 0.4s;
            }

            #lightbox {
                display: none;
                position: fixed;
                z-index: 1000;
                padding-top: 50px;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0, 0, 0, 0.9);
                text-align: center;
            }

                #lightbox img {
                max-width: 90%;
                max-height: 80vh;
                border-radius: 10px;
            }

                #lightbox-descricao {
                color: #fff;
                margin-top: 15px;
                font-size: 18px;
                font-weight: 400;
                text-align: center;
                max-width: 80%;
                margin-left: auto;
                margin-right: auto;
                line-height: 1.4;
            }

            @keyframes zoom {
            from {
                transform: scale(0.7);
            }

            to {
                transform: scale(1);
            }
            }

            .fechar-lightbox {
            position: absolute;
            top: 20px;
            right: 35px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            }

            .fechar-lightbox:hover {
            color: #f00;
            }

        </style>
    </x-slot:styles>

    <div class="main-container">

        <div class="pagina-cabecalho">
            <h1>Galeria de Fotos</h1>
        </div>

            <div class="carrossel">
                <div class="slides">
                    <img src="{{ asset('imagens/tocando-piano.jpg') }}" alt="aula de piano" class="slide">
                    <img src="{{ asset('imagens/tocando-teclado.jpg') }}" alt="aula de teclado" class="slide">
                </div>
                <button class="anterior">&#10094;</button>
                <button class="proximo">&#10095;</button>
            </div>

            <div class="pagina-cabecalho">
                <h1>Fotos da Agenda Cultural</h1>
            </div>

            <!-- ===== CARROSSEL 2 ===== -->
            <div class="carrossel">
                <div class="slides">
                    <img src="https://picsum.photos/id/1035/800/400" alt="Imagem 3">
                    <img src="https://picsum.photos/id/1045/800/400" alt="Imagem 4">
                    <img src="https://picsum.photos/id/1055/800/400" alt="Imagem 5">
                </div>
                <button class="anterior">&#10094;</button>
                <button class="proximo">&#10095;</button>
            </div>

            <!-- ===== LIGHTBOX ===== -->
            <div id="lightbox" class="lightbox">
                <span class="fechar-lightbox" id="fechar-lightbox">&times;</span>
                <img class="lightbox-conteudo" id="lightbox-img">
                <p id="lightbox-descricao"></p>
            </div>
    </div>
</x-layout>