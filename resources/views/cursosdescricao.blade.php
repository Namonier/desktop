<x-layout>
    <x-slot:styles>
        <style>

            .curso-header {
                margin-bottom: 2rem;
                text-align: center;
            }

            .curso-header h1 {
                font-size: 2.8rem;
                font-weight: 700;
                color: var(--cor-secundaria);
                line-height: 1.2;
            }

            .curso-header p {
                font-size: 1.2rem;
                color: #555;
                margin-top: 0.5rem;
            }
            
            .curso-detalhe-grid {
                display: grid;
                grid-template-columns: 1fr; /* Uma coluna no mobile */
                gap: 2rem;
            }

            /* Caixa de informações principal */
            .curso-info-box {
                background-color: var(--cor-branco);
                padding: 1.5rem;
                border-radius: var(--borda-radius);
                box-shadow: var(--sombra-card);
            }

            .curso-info-box img {
                width: 100%;
                border-radius: var(--borda-radius);
                margin-bottom: 1.5rem;
            }

            .info-box-item {
                display: flex;
                align-items: center;
                gap: 1rem;
                padding: 1rem 0;
                border-bottom: 1px solid #eee;
            }
            .info-box-item:last-child {
                border-bottom: none;
            }
            .info-box-item svg {
                fill: var(--cor-principal);
            }
            
            .btn-inscricao {
                display: block;
                width: 100%;
                background-color: var(--cor-principal);
                color: var(--cor-branco);
                text-align: center;
                padding: 1rem;
                font-size: 1.2rem;
                font-weight: 600;
                border-radius: var(--borda-radius);
                margin-top: 1.5rem;
                transition: background-color 0.3s ease;
            }
            .btn-inscricao:hover {
                background-color: var(--cor-secundaria);
            }
            
            /* Conteúdo detalhado do curso */
            .curso-conteudo .curso-secao-detalhada {
                background-color: var(--cor-branco);
                padding: 2rem;
                border-radius: var(--borda-radius);
                box-shadow: var(--sombra-card);
                margin-bottom: 2rem;
            }

            .curso-conteudo h2 {
                font-size: 1.8rem;
                color: var(--cor-secundaria);
                margin-bottom: 1rem;
            }

            .curso-conteudo p, .curso-conteudo li {
                font-size: 1rem;
                line-height: 1.8;
                color: #555;
            }

            .curso-conteudo ul {
                list-style: none;
                padding-left: 0;
            }
            .curso-conteudo ul li {
                padding-left: 1.75rem;
                position: relative;
                margin-bottom: 0.75rem;
            }
            .curso-conteudo ul li::before {
                content: '🎵';
                color: var(--cor-principal);
                position: absolute;
                left: 0;
                font-size: 1.2rem;
            }

            .instructor-card {
                display: flex;
                align-items: center;
                gap: 1.5rem;
                background-color: var(--cor-fundo);
                padding: 1.5rem;
                border-radius: var(--borda-radius);
                margin-top: 1.5rem;
            }
            .instructor-card img {
                width: 80px;
                height: 80px;
                border-radius: 50%;
                object-fit: cover;
            }
            .instructor-card h4 {
                margin-bottom: 0.25rem;
                font-size: 1.2rem;
            }
            .instructor-card p {
                font-size: 0.9rem;
                color: #555;
            }

            @media (min-width: 1024px) {
                main { padding-top: 120px; } /* Aumenta o espaço para o título */
                .main-container { padding: 2rem; }

                .curso-detalhe-grid {
                    grid-template-columns: 350px 1fr; /* Coluna da esquerda fixa, direita flexível */
                    align-items: flex-start;
                }

                /* Efeito de "sidebar fixa" */
                .curso-info-box {
                    position: sticky;
                    top: 120px; /* Distância do topo = padding-top do main */
                }
            }

        </style>
    </x-slot:styles>

    <div class="main-container">
            <header class="curso-header">
                <h1>Curso de Iniciação Musical</h1>
            </header>

            <div class="curso-detalhe-grid">
                <aside class="curso-info-box">
                    
                    <div class="info-box-item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                        <div><strong>Duração:</strong> 6 meses</div>
                    </div>
                    <div class="info-box-item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H8V4h12v12zM12 5.5v9l6-4.5z"/></svg>
                        <div><strong>Modalidade:</strong> Presencial e EAD</div>
                    </div>
                    <div class="info-box-item">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px"><g><rect fill="none" height="24" width="24"/></g><g><path d="M23,12l-2.44-2.79l0.34-3.69l-3.61-0.82L15.4,1.44L12,2.83L8.6,1.44L6.71,4.7L3.1,5.52l0.34,3.69L1,12l2.44,2.79 l-0.34,3.69l3.61,0.82L8.6,22.56L12,21.17l3.4,1.39l1.89-3.26l3.61-0.82l-0.34-3.69L23,12z M10.36,16.64l-3.23-3.23l1.41-1.41 l1.82,1.82l4.24-4.24l1.41,1.41L10.36,16.64z"/></g></svg>
                        <div><strong>Nível:</strong> Iniciante</div>
                    </div>

                    <a wire:navigate href="https://wa.me/5584987379538?text=Ol%C3%A1,%20gostaria%20de%20participar%20de%20um%20curso%20com%20voc%C3%AAs!" target="_blank" class="btn-inscricao">Inscreva-se pelo WhatsApp</a>
                </aside>

                <div class="curso-conteudo">

                    <section class="curso-secao-detalhada">
                        <h2>O que você vai aprender:</h2>
                        <ul>
                            <li><strong>Teoria Fundamental:</strong> Entenda notas, pausas, claves e ritmo de uma maneira simples e prática.</li>
                            <li><strong>Técnica Instrumental:</strong> Desenvolva a postura correta, a coordenação motora e a digitação inicial para seu instrumento.</li>
                            <li><strong>Leitura de Partitura:</strong> Dê os primeiros passos para decifrar partituras e ganhar autonomia nos estudos.</li>
                            <li><strong>Repertório Inicial:</strong> Toque suas primeiras músicas, com arranjos pensados para o seu nível, garantindo progresso e motivação.</li>
                            <li><strong>Percepção Auditiva:</strong> Treine seu ouvido para reconhecer notas e melodias simples.</li>
                        </ul>



                        <h2>Para quem é este curso?</h2>
                        <p>Este curso é perfeito para crianças a partir de 7 anos, jovens e adultos que sempre sonharam em aprender um instrumento mas nunca souberam por onde começar. Se você busca um hobby relaxante, uma nova habilidade ou o início de uma carreira musical, este é o seu ponto de partida.</p>

                    

                        <h2>Conheça seu Professor</h2>
                        <div class="instructor-card">
                            <img src="https://placehold.co/160x160/f4f4f9/333?text=Professor(a)" alt="Foto do professor">
                            <div>
                                <h4>Maestro João Silva</h4>
                                <p>Com mais de 20 anos de experiência, o Maestro João é especialista em iniciação musical e apaixonado por revelar novos talentos.</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

</x-layout>