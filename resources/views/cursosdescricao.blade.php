<x-layout>
    <x-slot:styles>
        <style>
            /* SEUS ESTILOS MANTIDOS */
            .curso-header { margin-bottom: 2rem; text-align: center; }
            .curso-header h1 { font-size: 2.8rem; font-weight: 700; color: var(--cor-secundaria); line-height: 1.2; }
            .curso-header p { font-size: 1.2rem; color: #555; margin-top: 0.5rem; }
            .curso-detalhe-grid { display: grid; grid-template-columns: 1fr; gap: 2rem; margin-bottom: 3rem; }
            .curso-info-box { background-color: var(--cor-branco); padding: 1.5rem; border-radius: var(--borda-radius); box-shadow: var(--sombra-card); height: fit-content; }
            .info-box-item { display: flex; align-items: center; gap: 1rem; padding: 1rem 0; border-bottom: 1px solid #eee; }
            .info-box-item:last-child { border-bottom: none; }
            .info-box-item svg { fill: var(--cor-principal); }
            .btn-inscricao { display: block; width: 100%; background-color: var(--cor-principal); color: var(--cor-branco); text-align: center; padding: 1rem; font-size: 1.2rem; font-weight: 600; border-radius: var(--borda-radius); margin-top: 1.5rem; transition: background-color 0.3s ease; }
            .btn-inscricao:hover { background-color: var(--cor-secundaria); }
            .curso-conteudo .curso-secao-detalhada { background-color: var(--cor-branco); padding: 2rem; border-radius: var(--borda-radius); box-shadow: var(--sombra-card); margin-bottom: 2rem; }
            .curso-conteudo h2 { font-size: 1.8rem; color: var(--cor-secundaria); margin-bottom: 1rem; margin-top: 1.5rem; }
            .curso-conteudo h2:first-child { margin-top: 0; }
            .curso-conteudo ul { list-style: none; padding-left: 0; }
            .curso-conteudo ul li { padding-left: 1.75rem; position: relative; margin-bottom: 0.75rem; color: #555; }
            .curso-conteudo ul li::before { content: '🎵'; color: var(--cor-principal); position: absolute; left: 0; font-size: 1.2rem; }
            .instructor-card { display: flex; align-items: center; gap: 1.5rem; background-color: var(--cor-fundo); padding: 1.5rem; border-radius: var(--borda-radius); margin-top: 1rem; }
            .instructor-card img { width: 80px; height: 80px; border-radius: 50%; object-fit: cover; }

            @media (min-width: 1024px) {
                main { padding-top: 120px; }
                .main-container { padding: 2rem; }
                .curso-detalhe-grid { grid-template-columns: 350px 1fr; align-items: flex-start; }
                .curso-info-box { position: sticky; top: 120px; }
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


            <header class="curso-header">
                {{-- DINÂMICO: Nome do curso vindo do banco --}}
                <h1>{{ $curso['title']}}</h1>
            </header>

        <div class="curso-detalhe-grid">
            
            <aside class="curso-info-box">
                {{-- Informações DINÂMICAS da barra lateral --}}
                <div class="info-box-item">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                    <div><strong>Duração:</strong> {{ $curso['duration'] }}</div>
                </div>
                <div class="info-box-item">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H8V4h12v12zM12 5.5v9l6-4.5z"/></svg>
                    <div><strong>Modalidade:</strong> {{ $curso['modality'] }}</div>
                </div>
                <div class="info-box-item">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px"><g><rect fill="none" height="24" width="24"/></g><g><path d="M23,12l-2.44-2.79l0.34-3.69l-3.61-0.82L15.4,1.44L12,2.83L8.6,1.44L6.71,4.7L3.1,5.52l0.34,3.69L1,12l2.44,2.79 l-0.34,3.69l3.61,0.82L8.6,22.56L12,21.17l3.4,1.39l1.89-3.26l3.61-0.82l-0.34-3.69L23,12z M10.36,16.64l-3.23-3.23l1.41-1.41 l1.82,1.82l4.24-4.24l1.41,1.41L10.36,16.64z"/></g></svg>
                    <div><strong>Nível:</strong> {{ $curso->category->title ?? 'Sem categoria' }}
                    </div>
                </div>
                <a href="https://wa.me/55{{ $telefone }}?text=Ol%C3%A1,%20gostaria%20de%20participar%20de%20um%20curso%20com%20voc%C3%AAs!" target="_blank" class="btn-inscricao">Inscreva-se pelo WhatsApp</a>
            </aside>

            <div class="curso-conteudo">
                <section class="curso-secao-detalhada">
                    {!! $curso['description_long'] !!}
                    {{-- ESTÁTICO: Mantido como você pediu --}}
                    <!-- <h2>O que você vai aprender:</h2> 
                    <ul>
                        <li><strong>Teoria Fundamental:</strong> Entenda notas, pausas, claves e ritmo de uma maneira simples e prática.</li>
                        <li><strong>Técnica Instrumental:</strong> Desenvolva a postura correta, a coordenação motora e a digitação inicial para seu instrumento.</li>
                        <li><strong>Leitura de Partitura:</strong> Dê os primeiros passos para decifrar partituras e ganhar autonomia nos estudos.</li>
                        <li><strong>Repertório Inicial:</strong> Toque suas primeiras músicas, com arranjos pensados para o seu nível.</li>
                        <li><strong>Percepção Auditiva:</strong> Treine seu ouvido para reconhecer notas e melodias simples.</li>
                    </ul>

                    {{-- ESTÁTICO: Mantido como você pediu --}}
                    <h2>Para quem é este curso?</h2>
                    <p>Este curso é perfeito para crianças a partir de 7 anos, jovens e adultos que sempre sonharam em aprender um instrumento mas nunca souberam por onde começar.</p>
                    -->
                    {{-- DINÂMICO: Professores --}}
                    @if($curso->teachers->isNotEmpty())
                        <h2>Conheça seu Professor</h2>
                        
                        @foreach($curso->teachers as $prof)
                            <div class="instructor-card">
                                @if($prof->photo)
                                    <img src="{{ asset('storage/' . $prof->photo) }}" alt="{{ $prof->name }}">
                                @else
                                    <img src="https://via.placeholder.com/300" alt="Sem foto">
                                @endif
                                
                                <div>
                                    <h3><strong>{{ $prof->name }}</strong></h3>
                                    <p>{{ $prof->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p><em>Professor não atribuído para este curso.</em></p>
                    @endif

                </section>
            </div>
        </div> 
    </div>
</x-layout>