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
<form class="pt-5" method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Nome')" class="form-label"/>
        <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('E-mail')" class="form-label"/>
        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Senha')" class="form-label"/>

        <x-text-input id="password" class="form-control"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" class="form-control"/>
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirmar a senha')" class="form-label"/>

        <x-text-input id="password_confirmation" class="form-control"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="row pt-3">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="default-button d-flex justify-content-center">
                <button class="btn btn-acessar">Criar conta</button>
            </div>
        </div>
    </div>
</form>
@endsection
