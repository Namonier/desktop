<x-layout>
    <x-slot:styles>
        <style>
            main {
                padding: 1rem;
            }

            .main-container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 1rem;
            }

            /* ✨✨✨ NOVOS ESTILOS PARA A PÁGINA DA AGENDA ✨✨✨ */

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

            /* Container da lista de eventos */
            .agenda-lista {
                display: flex;
                flex-direction: column;
                gap: 1.5rem; /* Espaço entre os cards de evento */
            }
            
            /* Card de um evento individual */
            .evento-card {
                display: flex;
                flex-direction: column; /* Em telas pequenas, a data fica em cima */
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

            /* Seção da data do evento */
            .evento-data {
                background-color: var(--cor-principal);
                color: var(--cor-branco);
                text-align: center;
                padding: 1.5rem 1rem;
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

            /* Seção de informações do evento */
            .evento-info {
                padding: 1.5rem;
                flex: 1; /* Faz com que esta seção ocupe o espaço restante */
            }

            .evento-info h3 {
                font-size: 1.75rem;
                color: var(--cor-secundaria);
                margin-bottom: 0.75rem;
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

            @media (min-width: 1024px) {

                main { padding-top: 100px; }
                .main-container { padding: 2rem; }
        
        /* Ajustes da agenda para desktop */
                .evento-card {
                    flex-direction: row; /* Em telas grandes, a data fica ao lado das informações */
                }

                .evento-data {
                    flex-basis: 200px; /* Largura fixa para a seção da data */
                }
            }
        </style>
    </x-slot:styles>

    <div class="main-container">

        <div class="pagina-cabecalho">
            <h1>Agenda Cultural</h1>
            <p>Confira nossos próximos eventos e participe!</p>
        </div>

        <div class="agenda-lista">

            <div class="evento-card">
                <div class="evento-data">
                    <span class="dia">15</span>
                    <span class="mes">Setembro</span>
                </div>
                <div class="evento-info">
                    <h3>Recital de Piano Clássico</h3>
                    <div class="evento-meta">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px" fill="#666"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.5 14H8c-.55 0-1-.45-1-1s.45-1 1-1h8.5c.55 0 1 .45 1 1s-.45 1-1 1z"/></svg>
                            19:30
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px" fill="#666"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg>
                            Auditório Principal
                        </span>
                    </div>
                    <p class="evento-descricao">Uma noite dedicada aos grandes mestres do piano, com apresentações de nossos professores e alunos avançados. Obras de Chopin, Beethoven e Mozart.</p>
                    <a href="{{ route('agendadescricao') }}" class="evento-btn">Mais Informações</a>
                </div>
            </div>

            <div class="evento-card">
                <div class="evento-data">
                    <span class="dia">28</span>
                    <span class="mes">Setembro</span>
                </div>
                <div class="evento-info">
                    <h3>Workshop de Composição</h3>
                    <div class="evento-meta">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px" fill="#666"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.5 14H8c-.55 0-1-.45-1-1s.45-1 1-1h8.5c.55 0 1 .45 1 1s-.45 1-1 1z"/></svg>
                            14:00 - 18:00
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px" fill="#666"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg>
                            Sala de Estudos
                        </span>
                    </div>
                    <p class="evento-descricao">Aprenda os fundamentos da criação musical, desde a melodia até a harmonia. Vagas limitadas, ideal para iniciantes e intermediários.</p>
                    <a href="{{ route('agendadescricao') }}" class="evento-btn">Inscreva-se</a>
                </div>
            </div>

            <div class="evento-card">
                <div class="evento-data">
                    <span class="dia">05</span>
                    <span class="mes">Outubro</span>
                </div>
                <div class="evento-info">
                    <h3>Apresentação de Alunos</h3>
                    <div class="evento-meta">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px" fill="#666"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.5 14H8c-.55 0-1-.45-1-1s.45-1 1-1h8.5c.55 0 1 .45 1 1s-.45 1-1 1z"/></svg>
                            16:00
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px" fill="#666"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg>
                            Auditório Principal
                        </span>
                    </div>
                    <p class="evento-descricao">Venha prestigiar o talento e a dedicação dos nossos alunos em um recital emocionante com repertório variado. Entrada franca.</p>
                    <a href="{{ route('agendadescricao') }}" class="evento-btn">Saiba Mais</a>
                </div>
            </div>

        </div>

    </div>

</x-layout>