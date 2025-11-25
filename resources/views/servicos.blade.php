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

            .servico-card {
                /* Transforma o card em um contêiner flexível */
                display: flex;
                /* Empilha os itens um em cima do outro (verticalmente) */
                flex-direction: column;
                /* Centraliza todos os itens horizontalmente */
                align-items: center;
            
                /* Opcional: Centraliza também o texto do h3 e p */
                text-align: center;
            
                /* Estilos adicionais para melhorar a aparência do card */
                border: 1px solid #e0e0e0;
                border-radius: 8px;
            }
            
            .servico-icone img {
            /* Opcional: Define um tamanho para o ícone */
                width: 50px;
                height: 50px;
                margin-bottom: 16px; /* Adiciona um espaço abaixo do ícone */
            }
            .pagina-cabecalho h1 {
                color: var(--cor-secundaria);
                font-size: 2.5rem;
                margin-bottom: 0.5rem;
            }

            /* Grid para os cards de serviço */
            .servicos-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                gap: 1.5rem;
                margin-bottom: 3rem;
            }

            /* Card de serviço individual */
            .servico-card {
                background-color: var(--cor-branco);
                border-radius: var(--borda-radius);
                box-shadow: var(--sombra-card);
                padding: 2rem;
                text-align: center;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .servico-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }

            .servico-icone {
                margin-bottom: 1rem;
            }

            .servico-icone svg {
                width: 60px;
                height: 60px;
                fill: var(--cor-principal); /* Cor do ícone */
            }
            
            .servico-card h3 {
                font-size: 1.5rem;
                color: var(--cor-secundaria);
                margin-bottom: 0.75rem;
            }

            .servico-card p {
                font-size: 1rem;
                line-height: 1.6;
                color: #666;
            }
            
            /* Seção de Chamada para Ação (Call to Action) */
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
                background-color: #9d4edd; /* Um tom mais claro de roxo */
            }

            /* --- VERSÃO DESKTOP --- */
            @media (min-width: 1024px) {
                main { padding-top: 100px; }
                .main-container { padding: 2rem; }
            }

        </style>
    </x-slot:styles>
        <div class="main-container">

            <div class="pagina-cabecalho">
                <h1>Nossos Serviços</h1>
                <p>Música e elegância para todos os momentos.</p>
            </div>

            <div class="servicos-grid">
                @foreach($servicos as $servico)
                    <div class="servico-card">
                        <h3>{{ $servico['title'] }}</h3>
                        <p>{{ $servico['description'] }}</p>
                    </div>
                @endforeach
            </div>

            <section class="cta-secao">
                <h2>Pronto para adicionar música ao seu evento?</h2>
                <p>Entre em contato conosco para um orçamento personalizado e sem compromisso.</p>
                <a  href="https://wa.me/5588987379538?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20seus%20servi%C3%A7os." class="cta-botao">Solicitar Orçamento</a>
            </section>

        </div>

</x-layout>