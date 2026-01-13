<x-layout>
    <x-slot:styles>
        <style>
            /* --- VARIÁVEIS GERAIS (Caso não estejam no layout principal) --- */
            :root {
                --cor-principal: #8A2BE2;   /* Roxo do botão */
                --cor-secundaria: #4b0082;  /* Roxo escuro */
                --cor-branco: #ffffff;
                --borda-radius: 10px;
                --sombra-card: 0 4px 12px rgba(0, 0, 0, 0.1);
            }

            main { padding: 1rem; }

            .main-container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 1rem;
            }

            /* --- CABEÇALHO --- */
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

            /* --- FILTRO (SEU ESTILO ORIGINAL) --- */
            .container-filtro {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                width: 90%;
                max-width: 400px;
                margin-left: auto; /* Joga para a direita */
                margin-right: 0;
                margin-bottom: 30px; 
                display: block; /* Ajustado para block para conter os elementos */
            }

            .container-filtro label {
                display: block;
                margin-bottom: 10px;
                font-size: 1.1em;
                color: #333;
            }

            .container-filtro input[type="month"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 1em;
                box-sizing: border-box; 
            }

            .container-filtro button {
                background-color: #8A2BE2;
                color: white;
                border: none;
                padding: 12px 20px;
                border-radius: 5px;
                font-size: 1em;
                cursor: pointer;
                transition: background-color 0.3s ease;
                width: 100%; /* Botão largura total fica bom no mobile */
            }

            .container-filtro button:hover {
                background-color: #4b0082;
            }

            /* --- LISTA E CARDS --- */
            .agenda-lista {
                display: flex;
                flex-direction: column;
                gap: 1.5rem;
            }
            
            .evento-card {
                display: flex;
                flex-direction: column;
                background-color: var(--cor-branco);
                border-radius: var(--borda-radius);
                box-shadow: var(--sombra-card);
                overflow: hidden;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            
            .evento-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }

            .evento-data {
                background-color: var(--cor-principal);
                color: var(--cor-branco);
                text-align: center;
                padding: 1.5rem 1rem;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            
            .evento-data .dia {
                font-size: 3rem;
                font-weight: 600;
                line-height: 1;
            }

            .evento-data .mes {
                font-size: 1.2rem;
                text-transform: uppercase;
                letter-spacing: 1px;
            }

            .evento-info {
                padding: 1.5rem;
                flex: 1;
            }

            .evento-info h3 {
                font-size: 1.75rem;
                color: var(--cor-secundaria);
                margin-bottom: 0.75rem;
                margin-top: 0;
            }
            
            .evento-meta {
                display: flex;
                flex-wrap: wrap;
                gap: 1.5rem;
                color: #666;
                margin-bottom: 1rem;
                font-size: 0.9rem;
            }

            .evento-meta span {
                display: flex;
                align-items: center;
                gap: 0.5rem;
            }

            .evento-descricao {
                font-size: 1rem;
                line-height: 1.6;
                margin-bottom: 1.5rem;
                color: #444;
            }

            .evento-btn {
                display: inline-block;
                background-color: var(--cor-principal);
                color: var(--cor-branco);
                padding: 0.75rem 1.5rem;
                border-radius: var(--borda-radius);
                font-weight: 500;
                text-decoration: none;
                transition: background-color 0.3s ease;
            }
            
            .evento-btn:hover {
                background-color: var(--cor-secundaria);
            }

            /* --- ESTILO PARA QUANDO NÃO HÁ EVENTOS --- */
            .alerta-vazio {
                background-color: #fff3cd;
                color: #856404;
                border: 1px solid #ffeeba;
                padding: 20px;
                border-radius: 10px;
                text-align: center;
                font-size: 1.2rem;
            }

            /* --- RESPONSIVIDADE --- */
            @media (min-width: 1024px) {
                main { padding-top: 100px; }
                .main-container { padding: 2rem; }
        
                .evento-card {
                    flex-direction: row;
                }

                .evento-data {
                    flex-basis: 200px;
                    min-width: 200px;
                }
            }
        </style>
    </x-slot:styles>

    <div class="main-container">
        
        <div class="pagina-cabecalho">
            <h1>Agenda Cultural</h1>
            <p>Confira nossos próximos eventos e participe!</p>
        </div>

        <div class="container-filtro" style="background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); width: 100%; max-width: 400px; margin-left: auto; margin-right: 0; margin-bottom: 30px;">
            
            <form action="{{ route('agendacultural.menu') }}" method="GET">
                
                <label for="mesAnoInput" style="display: block; margin-bottom: 10px; font-weight: bold; color: #333;">
                    Selecione o mês e ano:
                </label>
                
                <input 
                    type="month" 
                    id="mesAnoInput" 
                    name="mesAno" 
                    value="{{ request('mesAno') }}"
                    style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;"
                >
                
                <button type="submit" style="width: 100%; background-color: #8A2BE2; color: white; padding: 12px; border: none; border-radius: 5px; font-size: 1em; cursor: pointer;">
                    Mostrar Seleção
                </button>

                @if(request('mesAno'))
                    <div style="margin-top: 10px; text-align: center;">
                        <a href="{{ route('agendacultural.menu') }}" style="color: #666; font-size: 0.9em; text-decoration: none;">
                            ✕ Limpar filtro
                        </a>
                    </div>
                @endif

            </form>

        </div>

        <div class="agenda-lista">
            
            @forelse($eventos as $evento)
                <div class="evento-card">
                    <div class="evento-data">
                        <span class="dia">{{ \Carbon\Carbon::parse($evento->event_datetime)->format('d') }}</span>
                        <span class="mes">{{ mb_strtoupper(\Carbon\Carbon::parse($evento->event_datetime)->locale('pt_BR')->monthName) }}</span>
                    </div>

                    <div class="evento-info">
                        <h3>{{ $evento->title }}</h3>
                        
                        <div class="evento-meta">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px" fill="#666"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.5 14H8c-.55 0-1-.45-1-1s.45-1 1-1h8.5c.55 0 1 .45 1 1s-.45 1-1 1z"/></svg>
                                {{ \Carbon\Carbon::parse($evento->event_datetime)->format('H:i') }}
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px" fill="#666"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg>
                                {{ $evento->location }}
                            </span>
                        </div>

                        <p class="evento-descricao">{{ $evento->description }}</p>
                        
                        {{-- Botão de Saiba Mais --}}
                        <a href="{{ route('agendadescricao', $evento->id_event) }}" class="evento-btn">Mais Informações</a>
                    </div>
                </div>

            @empty
                
                {{-- BLOCCO QUE APARECE QUANDO NÃO TEM EVENTOS --}}
                <div class="alerta-vazio">
                    <p>⚠️ Nenhum evento encontrado para <strong>{{ request('mesAno') }}</strong>.</p>
                </div>

            @endforelse

        </div>

    </div>
</x-layout>