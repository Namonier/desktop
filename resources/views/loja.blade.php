<x-layout>
    <x-slot:styles>
        <style>
            img {
                max-width: 100%;
                display: block;
            }
            main {
                padding: 1rem;
            }

            .main-container {
                max-width: 1200px;
                margin: 0 auto;
                margin-top: 2rem;
                padding: 1rem;
            }

            /* --- ESTILOS PARA A PÁGINA DA LOJA --- */
            .pagina-cabecalho { text-align: center; margin-bottom: 2rem; padding: 2rem 1rem; background-color: var(--cor-branco); border-radius: var(--borda-radius); box-shadow: var(--sombra-card); }
            .pagina-cabecalho h1 { color: var(--cor-secundaria); font-size: 2.5rem; margin-bottom: 0.5rem; }
            .loja-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 1.5rem; }
            .produto-card-loja { background-color: var(--cor-branco); border-radius: var(--borda-radius); box-shadow: var(--sombra-card); overflow: hidden; transition: transform 0.3s, box-shadow 0.3s; }
            .produto-card-loja:hover { transform: translateY(-5px); box-shadow: 0 8px 15px rgba(0,0,0,0.15); }
            .produto-imagem-container img { width: 100%; aspect-ratio: 1 / 1; object-fit: cover; }
            .produto-info-loja { padding: 1rem; text-align: center; }
            .produto-nome { font-size: 1.1rem; font-weight: 500; color: var(--cor-texto); margin-bottom: 0.5rem; }
            .produto-preco { font-size: 1.5rem; font-weight: 600; color: var(--cor-principal); }
            
            /* --- RODAPÉ --- */
            .rodape { background-color: #333; color: var(--cor-branco); text-align: center; padding: 2rem 1rem; font-size: 0.9rem; margin-top: 2rem;}
            .rodape p { margin-bottom: 0.5rem; }
            .pagina-cabecalho {
                margin-top: 2rem;
            }
            /* Adicione padding aqui */
            .produto-imagem-container {
                padding: 20px; /* Isso cria um respiro em volta da imagem */
                text-align: center; /* Garante que ela fique centralizada */
            }

            /* Mantenha o img como 100% ou reduza um pouco se quiser */
            .produto-imagem-container img {
                width: 100%;
                aspect-ratio: 1 / 1;
                object-fit: contain; /* Mude de 'cover' para 'contain' para ver o produto todo sem cortes */
                border-radius: 8px; /* Opcional: fica bonito com bordas arredondadas */
            }

        </style>
    </x-slot:styles>

        <div class="main-container">

            <div class="pagina-cabecalho">
                <h1>Nossa Loja</h1>
                <p>Instrumentos e acessórios de qualidade para sua jornada musical.</p>
            </div>


            <div class="loja-grid">
                @foreach($itens as $item)
                    <div class="produto-card-loja">
                        @php
                            $img = collect($itens_imagens)->firstWhere('id_product', $item['id_product']);
                        @endphp

                        <div class="produto-imagem-container">
                            @if($img)
                                <img src="{{ asset('storage/' . $img['image_url']) }}" alt="$img['name']">
                            @else
                                <img src="https://via.placeholder.com/300" alt="Imagem indisponível">
                            @endif
                        </div>

                        <div class="produto-info-loja">
                            <h3 class="produto-nome">{{ $item['name'] }}</h3>
                            <p class="produto-preco">R$ {{ number_format($item['price'], 2, ',', '.') }}</p>
                            <a href="{{ route('lojaproduto', $item['id_product']) }}">Ver mais</a>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>

</x-layout>