@extends('layouts.container')
@section('style')
<style>
    .btn-acessar,
        .btn-criar {
            font-size: 20px;
            background-color: #65D2C6;
            color: #fff;
            border-radius: 15px;
            width: 300px;
            /* Largura desejada */
            height: 50px;
        }

        .btn-acessar:hover,
        .btn-criar:hover {
            background-color: #9C62AA;
            color: #FFFFFF;
        }

        /* Adiciona algum espaço entre os botões */
        .default-button {
            margin-bottom: 10px;
        }
</style>
@endsection
@section('content')
    <form class="pt-5" method="POST" action="{{ route('login') }}">
        @csrf
        <center>
            <h3 class="fs-2">Entre com seu e-mail e senha para acessar sua conta</h3>
        </center>
        <div class="mb-3 pt-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@diazen.com" value="teste@teste.com">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="**********" value="12345678">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="row pt-3">
            {{-- <div class="col-md-12 d-flex justify-content-center">
                <button class="btn btn-primary">
                    Acessar
                </button>
            </div> --}}
            <div class="default-button d-flex justify-content-center">
                <button class="btn btn-acessar">Acessar</button>
            </div>
            <div class="default-button d-flex justify-content-center">
                <a class="btn btn-criar" href="{{ route('register') }}">Criar nova conta</a>
            </div>
        </div>
    </form>
@endsection
