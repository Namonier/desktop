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
                grid-template-columns: 1fr; /* Mobile: 1 coluna */
                gap: 2rem;
                align-items: center; /* Alinha verticalmente */
                background-color: var(--cor-branco);
                padding: 2rem;
                border-radius: var(--borda-radius);
                box-shadow: var(--sombra-card);
            }

            .sobre-texto h2 {
                font-size: 2rem;
                color: var(--cor-secundaria);
                margin-bottom: 1rem;
                text-align: center;
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
                background-color: var(--cor-fundo); /* Verifique se esta variável existe */
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

            /* CORREÇÃO AQUI: Mudado de 'svg' para 'img' para funcionar com seus arquivos PNG */
            .social-link img {
                width: 48px;
                height: 48px;
                /* fill: var(--cor-principal); -> Fill não funciona em PNG, apenas SVG inline */
            }

            .mapa-container {
                margin-top: 2rem;
                /* padding removido aqui pois já existe dentro do grid/card se necessário, ou mantido conforme preferência */
                display: grid;
                grid-template-columns: 1fr;
                gap: 2rem;
                background-color: var(--cor-branco);
                padding: 2rem;
                border-radius: var(--borda-radius);
                box-shadow: var(--sombra-card);
            }

            .sobre-mapa h2 {
                font-size: 2rem;
                text-align: center;
                color: var(--cor-secundaria);
                margin-bottom: 1rem;
            }

            .mapa {
                overflow: hidden;
                position: relative;
                width: 100%;
                padding-bottom: 56.25%; /* Aspect ratio 16:9 responsivo */
                height: 0;
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

            }
        </style>
    </x-slot:styles>

    <div class="main-container">

        <div class="sobre-container">

            <div class="sobre-texto">
                <h2>Nossa História</h2>
                <p>
                    {{ $sobre }}
                </p>
            </div>
        </div>

        <div class="mapa-container">
            <section style="width: 100%">
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
                    <a href="https://wa.me/55{{ $telefone }}" target="_blank" aria-label="Link para o WhatsApp">
                        <img src="{{ asset('imagens/icon-whatsapp.png') }}" alt="Ícone do WhatsApp">
                    </a>
                </div>
                <div class="social-link">
                    <a href="https://www.instagram.com/casadopianomossoro/" target="_blank" aria-label="Link para o Instagram">
                        <img src="{{ asset('imagens/icon-instagram.png') }}" alt="Ícone do Instagram">
                    </a>
                </div>
                <div class="social-link">
                    <a href="https://www.youtube.com/channel/UCAwGovOjkUQSES_hwSYqQrQ" target="_blank" aria-label="Link para o YouTube">
                        <img src="{{ asset('imagens/icon-youtube.png') }}" alt="Ícone do YouTube">
                    </a>
                </div>
            </div>
        </section>

    </div>
</x-layout>