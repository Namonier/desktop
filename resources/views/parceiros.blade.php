
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

            /* Grid para os cards de parceiros */
            .parceiros-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                gap: 1.5rem;
                margin-bottom: 3rem;
            }
            
            /* Card de parceiro individual */
            .parceiro-card {
                background-color: var(--cor-branco);
                border-radius: var(--borda-radius);
                box-shadow: var(--sombra-card);
                overflow: hidden;
                display: flex;
                flex-direction: column;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            
            .parceiro-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }

            /* Container do logo para padronizar tamanhos */
            .parceiro-logo {
                background-color: #fdfdff; /* Fundo levemente diferente para logos com transparência */
                padding: 1.5rem;
                aspect-ratio: 16 / 9; /* Proporção para logos */
                display: flex;
                justify-content: center;
                align-items: center;
            }
            
            .parceiro-logo img {
                max-width: 100%;
                max-height: 100%;
                object-fit: contain; /* Garante que o logo apareça inteiro, sem cortar */
            }
            
            .parceiro-info {
                padding: 1.5rem;
                display: flex;
                flex-direction: column;
                flex-grow: 1; /* Faz com que esta área cresça, alinhando os botões */
            }

            .parceiro-info h3 {
                font-size: 1.5rem;
                color: var(--cor-secundaria);
                margin-bottom: 0.75rem;
            }
            
            .parceiro-info p {
                font-size: 1rem;
                line-height: 1.6;
                color: #666;
                flex-grow: 1;
                margin-bottom: 1.5rem;
            }
            
            .parceiro-btn {
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
            
            .parceiro-btn:hover {
                background-color: var(--cor-secundaria);
            }

            /* Seção de Chamada para Ação */
            .cta-secao {
                background-color: var(--cor-secundaria);
                color: var(--cor-branco);
                text-align: center;
                padding: 3rem 1.5rem;
                border-radius: var(--borda-radius);
            }

            .cta-secao h2 {
                font-size: 2rem;
                margin-bottom: 1rem;
            }
            
            .cta-botao {
                display: inline-block;
                background-color: var(--cor-principal);
                color: var(--cor-branco);
                padding: 1rem 2rem;
                border-radius: var(--borda-radius);
                font-size: 1.1rem;
                font-weight: 600;
                text-decoration: none;
                margin-top: 1rem;
                transition: background-color 0.3s ease;
            }

            .cta-botao:hover {
                background-color: #9d4edd;
            }
            
            /* --- RODAPÉ --- */
            .rodape { background-color: #333; color: var(--cor-branco); text-align: center; padding: 2rem 1rem; font-size: 0.9rem; margin-top: 2rem;}
            .rodape p { margin-bottom: 0.5rem; }

            /* --- VERSÃO DESKTOP --- */
            @media (min-width: 1024px) {
                main { padding-top: 100px; }
                .main-container { padding: 2rem; }
            }
        </style>
    </x-slot:styles>
        <div class="main-container">

            <div class="pagina-cabecalho">
                <h1>Nossos Parceiros</h1>
                <p>Juntos, fortalecemos a cena cultural e musical de Mossoró.</p>
            </div>

            <div class="parceiros-grid">

                <div class="parceiro-card">
                    <div class="parceiro-logo">
                        <img src="https://placehold.co/400x225/8a2be2/FFF?text=Luteria+Silva" alt="Logo da Luteria Artesanal Silva">
                    </div>
                    <div class="parceiro-info">
                        <h3>Luteria Artesanal Silva</h3>
                        <p>Nosso parceiro oficial para reparos, manutenção e customização de instrumentos de corda, garantindo a melhor qualidade para nossos clientes e alunos.</p>
                        <a href="#" class="parceiro-btn">Visitar Site</a>
                    </div>
                </div>

                <div class="parceiro-card">
                    <div class="parceiro-logo">
                        <img src="https://placehold.co/400x225/4b0082/FFF?text=Som+Puro" alt="Logo do Estúdio de Gravação Som Puro">
                    </div>
                    <div class="parceiro-info">
                        <h3>Estúdio de Gravação Som Puro</h3>
                        <p>O local onde nossos alunos e artistas locais podem gravar suas músicas com qualidade profissional. Oferecem descontos especiais para a comunidade da Casa do Piano.</p>
                        <a href="#" class="parceiro-btn">Visitar Site</a>
                    </div>
                </div>

                <div class="parceiro-card">
                    <div class="parceiro-logo">
                        <img src="https://placehold.co/400x225/8a2be2/FFF?text=Café+Melodia" alt="Logo do Café Cultural Melodia">
                    </div>
                    <div class="parceiro-info">
                        <h3>Café Cultural Melodia</h3>
                        <p>Um espaço aconchegante que sedia nossos recitais menores e saraus, unindo a paixão pelo café com o amor pela música ao vivo.</p>
                        <a href="#" class="parceiro-btn">Visitar Site</a>
                    </div>
                </div>

            </div>
            
            <section class="cta-secao">
                <h2>Quer ser nosso parceiro?</h2>
                <p>Se sua empresa compartilha da nossa paixão pela cultura e pela música, entre em contato e vamos conversar sobre como podemos colaborar.</p>
                <a href="mailto:casadopianomossoro@gmail.com" class="cta-botao">Entre em Contato</a>
            </section>

        </div>
</x-layout>