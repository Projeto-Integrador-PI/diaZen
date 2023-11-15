@extends("layouts.container")
@section("content")


<h1 class="titulo-centralizado">Configurações</h1>

<div class="container">
    <div class="menu2">
        <div class="opcao">
            <i class="fas fa-smile"></i>
            <span>Minha conta</span>
            <a href="minhaconta.html"><i class="fa fa-arrow-right icone-seta"></i></a>
        </div>
        <div class="opcao">
            <i class="fas fa-paint-brush"></i>
            <span>Preferências</span>
            <a href="preferencias.html"><i class="fa fa-arrow-right icone-seta"></i></a>
        </div>
        <div class="opcao">
            <i class="fas fa-question-circle"></i>
            <span>Ajuda</span>
            <a href="ajuda.html"><i class="fa fa-arrow-right icone-seta"></i></a>
        </div>
        <div class="opcao">
            <i class="fa fa-file-text"></i>
            <span>Termos e condições</span>
            <a href="termosecondicoes.html"><i class="fa fa-arrow-right icone-seta"></i></a>
        </div>
    </div>

    <div class="link-apoio">
        <a href="outra-pagina.html"><span>$ Apoie nosso projeto!</span></a>
    </div>
</div>

@endsection
