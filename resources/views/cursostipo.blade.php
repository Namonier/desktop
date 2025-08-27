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
            
            /* Grid para os cards de curso */
            .cursos-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                gap: 1.5rem;
            }

            /* Card de curso individual */
            .curso-card {
                background-color: var(--cor-branco);
                border-radius: var(--borda-radius);
                box-shadow: var(--sombra-card);
                overflow: hidden;
                display: flex;
                flex-direction: column;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .curso-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }
            
            .curso-card-imagem img {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }

            .curso-card-conteudo {
                padding: 1.5rem;
                display: flex;
                flex-direction: column;
                flex-grow: 1; /* Faz o conteúdo crescer para alinhar os botões */
            }

            .curso-card-conteudo h3 {
                font-size: 1.75rem;
                color: var(--cor-secundaria);
                margin-bottom: 0.75rem;
            }
            
            .curso-card-conteudo p {
                font-size: 1rem;
                line-height: 1.6;
                color: #666;
                flex-grow: 1; 
                margin-bottom: 1.5rem;
            }
            
            .curso-btn {
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
            
            .curso-btn:hover {
                background-color: var(--cor-secundaria);
            }

        </style>
    </x-slot:styles>

    <div class="main-container">

        <div class="pagina-cabecalho">
            <h1>Nossos Cursos de Música</h1>
            <p>Escolha seu instrumento e comece sua jornada musical conosco.</p>
        </div>

        <div class="cursos-grid">

            <div class="curso-card">
                <div class="curso-card-imagem">
                    <img src="https://placehold.co/600x400/8a2be2/FFF?text=Violão" alt="Curso de Violão">
                </div>
                <div class="curso-card-conteudo">
                    <h3>Curso de Violão</h3>
                    <p>Aprenda a tocar violão do zero, passando pelos ritmos populares, acordes e técnicas para tocar suas músicas favoritas.</p>
                    <a href="{{ route('cursosdescricao') }}" class="curso-btn">Ver Detalhes do Curso</a>
                </div>
            </div>

            <div class="curso-card">
                <div class="curso-card-imagem">
                    <img src="https://placehold.co/600x400/4b0082/FFF?text=Teclado" alt="Curso de Teclado">
                </div>
                <div class="curso-card-conteudo">
                    <h3>Curso de Teclado</h3>
                    <p>Explore o universo das teclas, aprendendo harmonia, melodia e acompanhamentos para diversos estilos musicais.</p>
                    <a href="{{ route('cursosdescricao') }}" class="curso-btn">Ver Detalhes do Curso</a>
                </div>
            </div>

            <div class="curso-card">
                <div class="curso-card-imagem">
                    <img src="https://placehold.co/600x400/8a2be2/FFF?text=Piano" alt="Curso de Piano">
                </div>
                <div class="curso-card-conteudo">
                    <h3>Curso de Piano</h3>
                    <p>Do clássico ao popular, desenvolva sua técnica e expressividade no mais completo dos instrumentos com nosso método exclusivo.</p>
                    <a href="{{ route('cursosdescricao') }}" class="curso-btn">Ver Detalhes do Curso</a>
                </div>
            </div>
            
            </div>

    </div>
</x-layout>