@extends('layouts.container')
@section('content')
<main>
    <h1>Histórico</h1>
    <div class="historico-container">
        <h2 class="dia">Dia 01</h2>
        <div class="relato">
            <div class="relato-emoji">
                <img src="{{ asset('assets/icons/feliz.svg') }}" alt="Emoji">
                <p>Feliz</p>
            </div>
            <p id="relato-paragrafo">Fiz o que eu queria e me senti bem por isso</p>
        </div>
        <div class="evento">
            <h3>Evento</h3>
            <p class="evento-titulo">Aniversário da minha amiga</p>
            <div class="sentimentos">
                <div class="positivo">
                    <div class="positivo-container">
                        <img src="{{ asset('assets/icons/concluido-no-circle.svg') }}" alt="confere">
                        <p>Fui com os amigos</p>
                    </div>
                </div>
                <div class="negativo">
                    <div class="negativo-container">
                        <img src="{{ asset('assets/icons/x.svg') }}" alt="não confere">
                        <p>Local fechado</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
