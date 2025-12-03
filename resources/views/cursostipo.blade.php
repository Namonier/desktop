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
    
            @if(empty($curso_tipos))
                <p>Nenhum curso encontrado nesta categoria.</p>
            @else
                @foreach($curso_tipos as $curso_tipo)
                    <div class="curso-card">
                        <div class="curso-card-conteudo">
                            <h3>{{ $curso_tipo['title'] }}</h3>
                            <h5>{{ $curso_tipo['modality'] }}</h5>
                            <p>{{ $curso_tipo['description'] }}</p>

                            <a href="{{ route('cursosdescricao', $curso_tipo['id_courses']) }}" class="curso-btn">
                                Saiba Mais
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>


    </div>
</x-layout>