
<x-layout>
    <x-slot:styles>
        <style>
            /* --- ESTILOS GERAIS DA PÁGINA --- */
            .main-container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 2rem 1rem; /* Aumenta espaçamento lateral e vertical */
            }

            .pagina-cabecalho {
                text-align: center;
                margin-bottom: 3rem;
                padding: 3rem 2rem;
                background-color: #fff;
                border-radius: var(--borda-radius);
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            }

            .pagina-cabecalho h1 {
                color: var(--cor-secundaria);
                font-size: 2.5rem;
                margin-bottom: 0.5rem;
            }

            /* --- GRID DE PARCEIROS --- */
            .parceiros-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                gap: 2rem; /* Maior gap entre os cards */
                margin-bottom: 4rem;
            }

            /* --- CARD DE PARCEIRO --- */
            .parceiro-card {
                background-color: var(--cor-branco);
                border-radius: var(--borda-radius);
                box-shadow: var(--sombra-card);
                overflow: hidden;
                display: flex;
                flex-direction: column;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                min-height: 400px; /* Altura uniforme */
            }

            .parceiro-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }

            /* --- INFORMAÇÕES DO CARD --- */
            .parceiro-info {
                padding: 1.5rem;
                display: flex;
                flex-direction: column;
                flex-grow: 1; /* Ocupa o espaço disponível, empurrando o botão para baixo */
            }

            .parceiro-info h3 {
                font-size: 1.5rem;
                color: var(--cor-secundaria);
                margin-bottom: 0.75rem;
            }

            .parceiro-info p {
                font-size: 1rem;
                line-height: 1.6;
                text-align: center;
                text-justify: center;
                color: #666;
                flex-grow: 1; /* Ocupa o espaço para alinhar botões de cards com textos de tamanhos diferentes */
                margin-bottom: 1.5rem;
            }

            /* --- BOTÃO DO CARD --- */
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

            /* --- SEÇÃO DE CHAMADA PARA AÇÃO (CTA) --- */
            .cta-secao {
                background: linear-gradient(135deg, #8a2be2, #4b0082);
                color: #fff;
                text-align: center;
                padding: 4rem 2rem;
                border-radius: var(--borda-radius);
            }

            .cta-secao h2 {
                font-size: 2rem;
                margin-bottom: 1rem;
            }

            .cta-botao {
                display: inline-block;
                background-color: #fff;
                color: var(--cor-secundaria);
                padding: 1rem 2rem;
                border-radius: var(--borda-radius);
                font-size: 1.2rem;
                font-weight: 600;
                text-decoration: none;
                margin-top: 1rem;
                transition: background-color 0.3s ease, color 0.3s ease;
            }

            .cta-botao:hover {
                background-color: var(--cor-secundaria);
                color: #fff;
            }

            /* --- RODAPÉ --- */
            .rodape {
                background-color: #333;
                color: var(--cor-branco);
                text-align: center;
                padding: 2rem 1rem;
                font-size: 0.9rem;
                margin-top: 2rem;
            }

            .rodape p {
                margin-bottom: 0.5rem;
            }

            /* --- MEDIA QUERY (RESPONSIVIDADE) --- */
            @media (max-width: 1023px){
                .main-container {
                    padding: 1rem;
                }
                .pagina-cabecalho {
                    padding: 2rem 1rem;
                }
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
                    <div class="parceiro-info">
                        <h3>Luteria Artesanal Silva</h3>
                        <p>Nosso parceiro oficial para reparos, manutenção e customização de instrumentos de corda, garantindo a melhor qualidade para nossos clientes e alunos.</p>
                        <a  href="#" class="parceiro-btn">Visitar Site</a>
                    </div>
                </div>

                <div class="parceiro-card">
                    <div class="parceiro-info">
                        <h3>Estúdio de Gravação Som Puro</h3>
                        <p>O local onde nossos alunos e artistas locais podem gravar suas músicas com qualidade profissional. Oferecem descontos especiais para a comunidade da Casa do Piano.</p>
                        <a  href="#" class="parceiro-btn">Visitar Site</a>
                    </div>
                </div>

                <div class="parceiro-card">
                    <div class="parceiro-info">
                        <h3>Café Cultural Melodia</h3>
                        <p>Um espaço aconchegante que sedia nossos recitais menores e saraus, unindo a paixão pelo café com o amor pela música ao vivo.</p>
                        <a  href="#" class="parceiro-btn">Visitar Site</a>
                    </div>
                </div>

            </div>
            
            <section class="cta-secao">
                <h2>Quer ser nosso parceiro?</h2>
                <p>Se sua empresa compartilha da nossa paixão pela cultura e pela música, entre em contato e vamos conversar sobre como podemos colaborar.</p>
                <a  href="https://wa.me/5584987379538?text=Ol%C3%A1,%20gostaria%20de%20fazer%20uma%20parceria%20com%20voc%C3%AAs!" class="cta-botao">Entre em Contato</a>
            </section>

        </div>
</x-layout>