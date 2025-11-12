<x-layout>

    <script src="https://elfsightcdn.com/platform.js" async></script>

    <x-slot:styles>
        <style>
            /* ESTILOS DA PÁGINA DO BLOG */
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
            @media (min-width: 1024px) {
                .main-container { padding: 2rem; }
            }

        </style>
    </x-slot:styles>

    <div class="main-container">

        <div class="pagina-cabecalho">
            <h1>Nosso Youtube</h1>
            <p>Assista às nossas apresentações, recitais e momentos especiais.</p>
        </div>

        <div class="elfsight-app-498fe646-c80e-4f31-becc-58015c3f614f" data-elfsight-app-lazy></div>

    </div>

</x-layout>