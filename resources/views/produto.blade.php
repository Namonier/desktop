<x-layout>
    <x-slot:styles>
        <style>
            .produto-detalhe-container {
                display: grid;
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            /* Container da Galeria (Esquerda) */
            .produto-galeria {
                display: flex;
                flex-direction: column;
            }

            .imagem-principal-container {
                width: 100%;
                border-radius: var(--borda-radius);
                border: 1px solid #eee;
                overflow: hidden;
            }

            .imagem-principal-container img {
                width: 100%;
                aspect-ratio: 1 / 1;
                object-fit: contain; /* Contain mostra o produto todo sem cortar */
                display: block;
            }

            .galeria-thumbnails {
                display: flex;
                gap: 1rem;
                margin-top: 1rem;
                overflow-x: auto; /* Permite rolar se tiver muitas fotos */
            }

            .thumbnail {
                width: 80px; /* Tamanho fixo para thumbnails */
                height: 80px;
                flex-shrink: 0;
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
                height: 100%;
                object-fit: cover;
            }
            
            /* Informações (Direita) */
            .produto-titulo { font-size: 2.5rem; font-weight: 600; color: var(--cor-secundaria); line-height: 1.2; margin-bottom: 1rem; }
            .produto-preco { font-size: 2rem; font-weight: 700; color: var(--cor-principal); margin-bottom: 1.5rem; }
            .produto-descricao-curta { font-size: 1.1rem; line-height: 1.6; color: #555; margin-bottom: 2rem; }
            
            .btn-comprar {
                display: block; width: 100%; background-color: var(--cor-principal); color: var(--cor-branco);
                text-align: center; padding: 1rem; font-size: 1.2rem; font-weight: 600;
                border-radius: var(--borda-radius); margin-bottom: 2rem; transition: background-color 0.3s ease;
            }
            .btn-comprar:hover { background-color: var(--cor-secundaria); }
            
            .produto-descricao-detalhada h3 { font-size: 1.5rem; color: var(--cor-secundaria); border-top: 1px solid #eee; padding-top: 1.5rem; }
            .produto-descricao-detalhada ul { list-style: none; padding-left: 0; margin-top: 1rem; color: #666; line-height: 1.8; }
            .produto-descricao-detalhada li { margin-bottom: 0.5rem; }

            @media (min-width: 1024px) {
                .produto-detalhe-container { grid-template-columns: 1fr 1fr; gap: 3rem; }
            }
        </style>
    </x-slot:styles>

    <div class="main-container">
        
        {{-- O ideal é que aqui viesse apenas UM $item do controller, mas mantive o foreach para compatibilidade --}}
        @foreach($itens as $item)
            <div class="produto-detalhe-container">
                
                {{-- LÓGICA DE IMAGENS --}}
                @php
                    // Filtra TODAS as imagens deste produto para montar a galeria
                    // Supondo que a coluna seja 'id_product'. Se for 'product_id', altere aqui.
                    $galeria = collect($itens_imagens)->where('id_product', $item['id_product'] ?? $item['id']);
                    
                    // Pega a primeira imagem para ser a principal
                    $imagemPrincipal = $galeria->first();
                @endphp

                <div class="produto-galeria">
                    
                    <div class="imagem-principal-container">
                        @if($imagemPrincipal)
                            <img id="imagem-principal-produto-{{ $loop->index }}" src="{{ asset('storage/' . $imagemPrincipal['image_url']) }}" alt="{{ $item['name'] }}">
                        @else
                            <img id="imagem-principal-produto-{{ $loop->index }}" src="https://via.placeholder.com/500" alt="Imagem indisponível">
                        @endif
                    </div>

                    <div class="galeria-thumbnails">
                        @if($galeria->count() > 0)
                            @foreach($galeria as $key => $foto)
                                <div class="thumbnail {{ $loop->first ? 'active' : '' }}" onclick="mudarImagem(this, 'imagem-principal-produto-{{ $parentLoop->index ?? 0 }}')">
                                    <img src="{{ asset('storage/' . $foto['image_url']) }}" alt="Foto {{ $key }}">
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <div class="produto-info-loja">
                    <h1 class="produto-titulo">{{ $item['name'] }}</h1>
                    
                    <p class="produto-preco">
                        R$ {{ number_format($item['price'], 2, ',', '.') }}
                    </p>
                    
                    <p class="produto-descricao-curta">{{ $item['description_short'] }}</p>
                    
                    <a href="https://wa.me/5584987379538?text=Olá,%20tenho%20interesse%20no%20produto:%20{{ $item['name'] }}" class="btn-comprar" target="_blank">
                        Tenho Interesse
                    </a>

                    <div class="produto-descricao-detalhada">
                        <h3>Detalhes do Produto</h3>

                        @php
                            $linhas = preg_split('/\r\n|\r|\n/', $item['description_long']);
                        @endphp

                        <ul>
                        @foreach ($linhas as $linha)
                            @php
                                if (preg_match('/^\s*(.*?)\s*[:;,]\s*(.*)$/', $linha, $m)) {
                                    $left = $m[1];
                                    $right = $m[2];
                                } else {
                                    $left = null;
                                    $right = $linha;
                                }
                            @endphp

                            <li>
                                @if ($left)
                                    <strong>{{ $left }}:</strong> {{ $right }}
                                @else
                                    {{ $right }}
                                @endif
                            </li>
                        @endforeach
                        </ul>
                    </div>

                </div>

            </div>
        @endforeach

    </div>

    <script>
        // Função simplificada para trocar a imagem
        function mudarImagem(element, mainImageId) {
            // 1. Acha a imagem grande pelo ID
            const mainImage = document.getElementById(mainImageId);
            
            // 2. Pega o src da miniatura que foi clicada
            const newSrc = element.querySelector('img').src;
            
            // 3. Troca a imagem grande
            mainImage.src = newSrc;

            // 4. Gerencia a classe 'active' (borda colorida)
            // Pega todos os thumbnails que estão junto com este que foi clicado
            const siblings = element.parentElement.children;
            for (let i = 0; i < siblings.length; i++) {
                siblings[i].classList.remove('active');
            }
            element.classList.add('active');
        }
    </script>

</x-layout>