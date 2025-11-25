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

        </style>
    </x-slot:styles>

    <div class="main-container">
            <article>
                <div class="evento-banner">
                    <img src="https://placehold.co/1200x400/4b0082/FFF?text=Recital+de+Piano" alt="Banner do Recital de Piano Clássico">
                </div>
                

                <div class="evento-meta-info">
                    <div class="meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zM9 14H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z"/></svg>
                        <span>15 de Setembro de 2025</span>
                    </div>
                    <div class="meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                        <span>19:30</span>
                    </div>
                    <div class="meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg>
                        <span>Auditório da Casa do Piano</span>
                    </div>
                     <div class="meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 10V6c0-1.11-.9-2-2-2H4c-1.1 0-2 .89-2 2v4c1.1 0 2 .89 2 2s-.9 2-2 2v4c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-4c-1.1 0-2-.89-2-2s.9-2 2-2zm-2-2.83L15.17 12 20 16.83V7.17zM4 18V6h11.17L10.34 12l4.83 6H4z"/></svg>
                        <span>Entrada: R$ 30,00</span>
                    </div>
                </div>

                <div class="btn-container">
                    <a  href="https://wa.me/5588987379538?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20informa%C3%A7%C3%B5es%20sobre%20o%20evento%20da%20agenda%20cultural." target="_blank" class="btn-ingresso">Mais informações</a>
                </div>

                <div class="evento-conteudo">
                    <section>
                        <h2>Sobre o Evento</h2>
                        <p>A Casa do Piano tem o prazer de apresentar uma noite inesquecível dedicada aos grandes mestres da música clássica. O recital contará com a performance do aclamado pianista convidado, que apresentará um repertório cuidadosamente selecionado, incluindo obras de Chopin, Beethoven e Mozart. Uma experiência emocionante e inspiradora para todos os amantes da boa música.</p>
                    </section>
                </div>
            </article>
        </div>
</x-layout>