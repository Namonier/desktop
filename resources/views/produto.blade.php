<x-layout>
    <x-slot:styles>
        <style>

            .produto-detalhe-container {
                display: grid;
                grid-template-columns: 1fr; /* Uma coluna no mobile */
                gap: 2rem;
            }

            .imagem-principal img {
                width: 100%;
                aspect-ratio: 1 / 1;
                object-fit: cover;
                border-radius: var(--borda-radius);
                border: 1px solid #eee;
            }

            .galeria-thumbnails {
                display: flex;
                gap: 1rem;
                margin-top: 1rem;
            }

            .thumbnail {
                flex: 1;
                border: 2px solid transparent;
                border-radius: var(--borda-radius);
                overflow: hidden;
                cursor: pointer;
                transition: border-color 0.3s ease;
            }

            .thumbnail.active {
                border-color: var(--cor-principal);
            }

            .thumbnail img {
                width: 100%;
                aspect-ratio: 1 / 1;
                object-fit: cover;
            }
            
            .produto-titulo {
                font-size: 2.5rem;
                font-weight: 600;
                color: var(--cor-secundaria);
                line-height: 1.2;
                margin-bottom: 1rem;
            }

            .produto-preco {
                font-size: 2rem;
                font-weight: 700;
                color: var(--cor-principal);
                margin-bottom: 1.5rem;
            }

            .produto-descricao-curta {
                font-size: 1.1rem;
                line-height: 1.6;
                color: #555;
                margin-bottom: 2rem;
            }
            
            .btn-comprar {
                display: block;
                width: 100%;
                background-color: var(--cor-principal);
                color: var(--cor-branco);
                text-align: center;
                padding: 1rem;
                font-size: 1.2rem;
                font-weight: 600;
                border-radius: var(--borda-radius);
                margin-bottom: 2rem;
                transition: background-color 0.3s ease;
            }
            .btn-comprar:hover {
                background-color: var(--cor-secundaria);
            }
            
            .produto-descricao-detalhada h3 {
                font-size: 1.5rem;
                color: var(--cor-secundaria);
                border-top: 1px solid #eee;
                padding-top: 1.5rem;
            }

            .produto-descricao-detalhada ul {
                list-style: disc;
                padding-left: 1.5rem;
                margin-top: 1rem;
                color: #666;
                line-height: 1.8;
            }

            /* --- VERSÃO DESKTOP --- */
            @media (min-width: 1024px) {
                main { padding-top: 100px; }
                .main-container { padding: 2rem; }
                
                .produto-detalhe-container {
                    grid-template-columns: 1fr 1fr; /* Duas colunas no desktop */
                    gap: 3rem;
                }
            }

        </style>
    </x-slot:styles>

    <div class="main-container">
            <div class="produto-detalhe-container">
                <div class="produto-galeria">
                    <div class="imagem-principal">
                        <img id="imagem-principal-produto" src="{{ asset('imagens/violaolaranja.jpeg') }}" alt="Violão Clássico Acústico - Vista frontal">
                    </div>
                    <div class="galeria-thumbnails">
                        <div class="thumbnail active">
                            <img src="{{ asset('imagens/violaolaranja.jpeg') }}" alt="Miniatura da vista frontal do violão">
                        </div>
                        <div class="thumbnail">
                            <img src="https://placehold.co/400x400/f4f4f9/333?text=Violão+(Detalhe)" alt="Miniatura de detalhe do violão">
                        </div>
                        <div class="thumbnail">
                            <img src="https://placehold.co/400x400/f4f4f9/333?text=Violão+(Costas)" alt="Miniatura da vista traseira do violão">
                        </div>
                    </div>
                </div>

                <div class="produto-info">
                    <h1 class="produto-titulo">Violão Clássico Acústico</h1>
                    <p class="produto-preco">R$ 459,00</p>
                    <p class="produto-descricao-curta">
                        Perfeito para iniciantes e estudantes, este violão clássico oferece um som equilibrado e conforto ao tocar. Construído com materiais de qualidade para garantir durabilidade e uma ótima experiência musical.
                    </p>
                    <a wire:navigate href="https://wa.me/5584987379538" target="_blank" class="btn-comprar">Comprar pelo WhatsApp</a>
                    <div class="produto-descricao-detalhada">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                            <li><strong>Tipo:</strong> Clássico Acústico</li>
                            <li><strong>Cordas:</strong> Nylon</li>
                            <li><strong>Tampo:</strong> Linden</li>
                            <li><strong>Cor:</strong> Natural</li>
                            <li><strong>Acabamento:</strong> Verniz brilhante</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <script>

        // Script para a galeria da página de produto
        const imagemPrincipal = document.getElementById('imagem-principal-produto');
        const thumbnails = document.querySelectorAll('.thumbnail');

        thumbnails.forEach(thumb => {
            thumb.addEventListener('click', function() {
                // Remove a classe 'active' de todas as miniaturas
                thumbnails.forEach(item => item.classList.remove('active'));
                
                // Adiciona a classe 'active' à miniatura clicada
                this.classList.add('active');
                
                // Troca a imagem principal pela imagem da miniatura clicada
                const novaImagemSrc = this.querySelector('img').src;
                imagemPrincipal.src = novaImagemSrc;
            });
        });
    </script>

</x-layout>   