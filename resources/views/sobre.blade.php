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
    </x-slot:styles>
    <div class="main-container">

        <div class="pagina-cabecalho">
            <h1>Sobre Nós</h1>
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
                    <a  href="https://wa.me/5584987379538" target="_blank" aria-label="Link para o WhatsApp">
                        <img src="{{ asset('imagens/icon-whatsapp.png') }}" alt="Imagem do icone do WhatsApp">
                    </a>
                </div>
                <div class="social-link">
                    <a  href="https://www.instagram.com/casadopianomossoro/#" target="_blank" aria-label="Link para o Instagram">
                    <img src="{{ asset('imagens/icon-instagram.png') }}" alt="Imagem do icone do Instagram">
                    </a>
                </div>
                <div class="social-link">
                    <a  href="http://www.youtube.com/channel/UCAwGovOjkUQSES_hwSYqQrQ" target="_blank" aria-label="Link para o YouTube">
                        <img src="{{ asset('imagens/icon-youtube.png') }}" alt="Imagem do icone do YouTube">
                    </a>
                </div>
            </div>
        </section>

    </div>
</x-layout>