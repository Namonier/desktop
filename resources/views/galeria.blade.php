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
                gap: 1rem; /* Espaço entre as fotos */
            }

            /* O item da galeria (cada foto) */
            .galeria-item {
                border-radius: var(--borda-radius);
                overflow: hidden; /* Garante que a imagem não ultrapasse as bordas arredondadas */
                box-shadow: var(--sombra-card);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                
                /* Correção principal: Força o item a ser um quadrado perfeito, o que estabiliza o grid */
                aspect-ratio: 1 / 1; 
            }

            .galeria-item:hover {
                transform: scale(1.03); /* Efeito de zoom mais sutil */
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            }
            
            /* A imagem dentro do item */
            .galeria-item img {
                width: 100%;
                height: 100%;
                /* Cobre todo o espaço do container sem distorcer a imagem (pode cortar um pouco) */
                object-fit: cover; 
            }

        </style>
    </x-slot:styles>

    <div class="main-container">

        <div class="pagina-cabecalho">
            <h1>Galeria de Fotos</h1>
            <p>Momentos especiais e a beleza da Casa do Piano.</p>
        </div>

        <div class="galeria-grid">

            <div class="galeria-item">
                <img src="{{ asset('imagens/tocando-piano.jpg') }}" alt="Descrição da Foto 1">
            </div>
            <div class="galeria-item">
                <img src="{{ asset('imagens/tocando-teclado.jpg') }}" alt="Descrição da Foto 2">
            </div>
            <div class="galeria-item">
                <img src="https://placehold.co/600x600/8a2be2/FFF?text=Foto+3" alt="Descrição da Foto 3">
            </div>
            <div class="galeria-item">
                <img src="https://placehold.co/600x600/4b0082/FFF?text=Foto+4" alt="Descrição da Foto 4">
            </div>
            <div class="galeria-item">
                <img src="https://placehold.co/600x600/8a2be2/FFF?text=Foto+5" alt="Descrição da Foto 5">
            </div>
            <div class="galeria-item">
                <img src="https://placehold.co/600x600/4b0082/FFF?text=Foto+6" alt="Descrição da Foto 6">
            </div>
                <div class="galeria-item">
                <img src="https://placehold.co/600x600/8a2be2/FFF?text=Foto+7" alt="Descrição da Foto 7">
            </div>
                <div class="galeria-item">
                <img src="https://placehold.co/600x600/4b0082/FFF?text=Foto+8" alt="Descrição da Foto 8">
            </div>
                <div class="galeria-item">
                <img src="https://placehold.co/600x600/8a2be2/FFF?text=Foto+9" alt="Descrição da Foto 9">
            </div>

            </div>

    </div>

</x-layout>