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
                padding: 2rem;
                display: flex;
                flex-direction: column;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .curso-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }

            .curso-card h3 {
                font-size: 1.75rem;
                color: var(--cor-secundaria);
                margin-bottom: 0.5rem;
            }
            
            .curso-modalidade {
                font-size: 0.9rem;
                color: var(--cor-principal);
                font-weight: 500;
                background-color: var(--cor-fundo);
                padding: 0.25rem 0.75rem;
                border-radius: 15px;
                display: inline-block;
                margin-bottom: 1rem;
            }

            .curso-descricao {
                font-size: 1rem;
                line-height: 1.6;
                color: #666;
                flex-grow: 1; /* Faz a descrição ocupar o espaço disponível, alinhando os botões */
                margin-bottom: 1.5rem;
            }
            
            .curso-btn {
                display: inline-block;
                background-color: var(--cor-principal);
                color: var(--cor-branco);
                padding: 0.75rem 1.5rem;
                border-radius: var(--borda-radius);
                font-weight: 500;
                text-decoration: none;
                transition: background-color 0.3s ease;
                text-align: center;
            }
            
            .curso-btn:hover {
                background-color: var(--cor-secundaria);
            }

            /* Estilo especial para o curso em construção */
            .curso-card.em-construcao {
                background-color: #f9f9f9;
                opacity: 0.7;
            }

            .curso-card.em-construcao .curso-btn {
                background-color: #ccc;
                cursor: not-allowed;
            }
            
            .aviso-construcao {
                font-weight: 600;
                color: #888;
            }
        </style>
    </x-slot:styles>

    <div class="main-container">

        <div class="pagina-cabecalho">
            <h1>Nossos Cursos</h1>
            <p>Encontre o caminho perfeito para sua jornada musical, do iniciante ao avançado.</p>
        </div>

        <div class="cursos-grid">
            @foreach($cursos as $curso)
                <div class="curso-card">
                    <h3>{{ $curso['title'] }}</h3>
                    <p class="curso-descricao">{{ $curso['description'] }}</p>
                    <a href="{{ route('cursostipo', $curso['id_categories']) }}" class="curso-btn">
                        Saiba Mais
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>