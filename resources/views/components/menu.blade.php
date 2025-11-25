<nav class="menu-lateral">
        <div class="menu-lateral-cabecalho">
            <a href="{{ route('inicial') }}" class="logo-link">
                <img src="logo_casa_do_piano.jpeg" alt="Logo Casa do Piano" class="logo">

            </a>
            <button id="fechar-menu-btn" aria-label="Fechar menu">
                <img src="{{ asset('imagens/icon-voltar.png') }}" alt="Icone do botão voltar">
            </button>
        </div>
        <ul>
            <li><a class="{{ request()->routeIs('inicial') ? 'menu-ativo' : '' }}" href="{{ route('inicial') }}">Início</a></li>
            <li><a class="{{ request()->routeIs('agendacultural') ? 'menu-ativo' : '' }}" href="{{ route('agendacultural') }}">Agenda Cultural</a></li>
            <li><a class="{{ request()->routeIs('cursos') ? 'menu-ativo' : '' }}" href="{{ route('cursos') }}">Cursos</a></li>
            <li><a class="{{ request()->routeIs('galeria') ? 'menu-ativo' : '' }}" href="{{ route('galeria') }}">Galeria</a></li>
            <li><a class="{{ request()->routeIs('loja') ? 'menu-ativo' : '' }}" href="{{ route('loja') }}">Loja</a></li>
            <li><a class="{{ request()->routeIs('parceiros') ? 'menu-ativo' : '' }}" href="{{ route('parceiros') }}">Parceiros</a></li>
            <li><a class="{{ request()->routeIs('servicos') ? 'menu-ativo' : '' }}" href="{{ route('servicos') }}">Serviços</a></li>
            <li><a class="{{ request()->routeIs('sobre') ? 'menu-ativo' : '' }}" href="{{ route('sobre') }}">Sobre</a></li>
            <li><a class="{{ request()->routeIs('youtube') ? 'menu-ativo' : '' }}" href="{{ route('youtube') }}">Youtube</a></li>
        </ul>
    </nav>
    <header class="cabecalho-mobile">
        <button class="menu-btn" aria-label="Abrir menu"><span></span><span></span><span></span></button>
        <h1>Casa do Piano</h1>
        <a href="{{ route('inicial') }}" class="logo-link-mobile" aria-label="Voltar para a página inicial">
            <img src="logo_casa_do_piano.jpeg" alt="Logo da Casa do Piano" class="logo">
        </a>
    </header>