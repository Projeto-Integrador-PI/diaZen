@extends("layouts.container")
@section('style')
<style>
    a {
        text-decoration: none;
        color: #A476AF;
    }
    a:hover {
        text-decoration: none;
        color: #7e5588;
    }
    span {
        margin-left: 5px;
    }
</style>
@endsection
@section("content")
<h1 class="titulo-centralizado">Configurações</h1>
<div class="container">
    <div class="menu2">
        <a href="{{ route('profile.edit') }}">
            <div class="opcao">
                <i class="fas fa-smile"></i>
                <span>Minha conta</span>
                <i class="fa fa-arrow-right icone-seta"></i>
            </div>
        </a>
        {{-- <div class="opcao">
            <i class="fas fa-paint-brush"></i>
            <span>Preferências</span>
            <a href="preferencias.html"><i class="fa fa-arrow-right icone-seta"></i></a>
        </div> --}}
        <a href="{{ route('help.index') }}">
            <div class="opcao">
                <i class="fas fa-question-circle"></i>
                <span>Ajuda</span>
                <i class="fa fa-arrow-right icone-seta"></i>
            </div>
        </a>
        <a href="{{ route('termos.index') }}">
            <div class="opcao">
                <i class="fa fa-file-text"></i>
                <span>Termos e condições</span>
                <i class="fa fa-arrow-right icone-seta"></i>
            </div>
        </a>
    </div>

    <div class="link-apoio">
        <a href="{{ route('apoie.index') }}"><span>$ Apoie nosso projeto!</span></a>
    </div>
</div>

@endsection
