<x-layout>
    <x-slot:styles>
        <style>
            .evento-banner img {
                width: 100%;
                height: 300px;
                object-fit: cover;
                border-radius: var(--borda-radius);
                margin-bottom: 2rem;
                box-shadow: var(--sombra-card);
            }

            .evento-header h1 {
                font-size: 2.8rem;
                font-weight: 700;
                color: var(--cor-secundaria);
                line-height: 1.2;
                text-align: center;
            }

            .evento-meta-info {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 1.5rem 3rem;
                margin: 2rem 0;
                padding: 1.5rem 0;
                border-top: 1px solid #ddd;
                border-bottom: 1px solid #ddd;
            }

            .meta-item {
                display: flex;
                align-items: center;
                gap: 0.75rem;
                font-size: 1rem;
                color: #333;
            }

            .meta-item svg {
                fill: var(--cor-principal);
            }
            
            .evento-conteudo {
                background-color: var(--cor-branco);
                padding: 2rem;
                border-radius: var(--borda-radius);
                box-shadow: var(--sombra-card);
                margin-top: 2rem;
            }

            .evento-conteudo h2 {
                font-size: 1.8rem;
                color: var(--cor-secundaria);
                margin-bottom: 1rem;
                border-bottom: 2px solid var(--cor-principal);
                padding-bottom: 0.5rem;
                display: inline-block;
            }

            .evento-conteudo p {
                font-size: 1.1rem;
                line-height: 1.8;
                color: #555;
                margin-bottom: 1.5rem;
            }
            
            .evento-mapa {
                overflow: hidden;
                position: relative;
                width: 100%;
                aspect-ratio: 16 / 9;
                border-radius: var(--borda-radius);
                border: 1px solid #ddd;
            }
            .evento-mapa iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border: 0;
            }

            .btn-container {
                text-align: center;
                margin: 2rem 0;
            }
            
            .btn-ingresso {
                display: inline-block;
                background-color: var(--cor-principal);
                color: var(--cor-branco);
                padding: 1rem 3rem;
                border-radius: 50px; /* Botão arredondado */
                font-size: 1.2rem;
                font-weight: 600;
                text-transform: uppercase;
                text-decoration: none;
                transition: background-color 0.3s ease, transform 0.3s ease;
                box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            }
            
            .btn-ingresso:hover {
                background-color: var(--cor-secundaria);
                transform: scale(1.05);
            }


            /* --- VERSÃO DESKTOP --- */
            @media (min-width: 1024px) {
                .evento-banner img { height: 250px; }
            }
            .btn-voltar {
                position: fixed;
                top: 90px; /* ajusta conforme seu header */
                left: 20px;
                width: 46px;
                height: 46px;
                border-radius: 12px;
                background-color: #ffffff;
                color: #8a2be2; /* roxo do site */
                border: none;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
                transition: all 0.25s ease;
                z-index: 1000;
            }

            .btn-voltar:hover {
                background-color: #8a2be2;
                color: #ffffff;
                transform: translateY(-2px);
                box-shadow: 0 12px 24px rgba(138, 43, 226, 0.35);
            }

            .btn-voltar:active {
                transform: scale(0.95);
            }


        </style>
    </x-slot:styles>

    <div class="main-container">
    <button id="voltar-btn" class="btn-voltar" aria-label="Voltar">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
    </button>

        <article>
            
            @php
                // Se $eventos for uma lista (Collection), pega o primeiro. Se não, usa ele mesmo.
                $evento = is_iterable($eventos) ? $eventos[0] : $eventos;
            @endphp

            <div class="evento-banner" style="position: relative;">
                <img src="https://placehold.co/1200x400/4b0082/FFF?text={{ urlencode($evento['title'] ?? 'Evento') }}" alt="Banner do Evento">
            </div>

            <div class="evento-meta-info">
                
                {{-- DATA --}}
                <div class="meta-item">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zM9 14H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z"/></svg>
                    <span>
                        {{ \Carbon\Carbon::parse($evento['event_datetime'])->locale('pt_BR')->translatedFormat('d \d\e F \d\e Y') }}
                    </span>
                </div>

                {{-- HORÁRIO --}}
                <div class="meta-item">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                    <span>
                        {{ \Carbon\Carbon::parse($evento['event_datetime'])->format('H:i') }}
                    </span>
                </div>

                {{-- LOCAL --}}
                <div class="meta-item">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg>
                    <span>{{ $evento['location'] }}</span>
                </div>

                {{-- PREÇO --}}
                <div class="meta-item">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 10V6c0-1.11-.9-2-2-2H4c-1.1 0-2 .89-2 2v4c1.1 0 2 .89 2 2s-.9 2-2 2v4c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-4c-1.1 0-2-.89-2-2s.9-2 2-2zm-2-2.83L15.17 12 20 16.83V7.17zM4 18V6h11.17L10.34 12l4.83 6H4z"/></svg>
                    <span>Entrada: {{ $evento['price'] ?? 'Grátis' }}</span>
                </div>
            </div>

            <div class="btn-container">
                <a href="https://wa.me/55{{ $telefone }}?text=Ol%C3%A1!%20Vi%20o%20evento%20{{ urlencode($evento['title'] ?? '') }}%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es." target="_blank" class="btn-ingresso">Fale Conosco</a>
            </div>

            <div class="evento-conteudo">
                <section>
                    <h2>Sobre o Evento</h2>
                    <p>{{ $evento['description_long'] ?? $evento['description'] }}</p>
                </section>
            </div>

        </article>
    </div>
</x-layout>