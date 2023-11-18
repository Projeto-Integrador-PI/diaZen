@extends('layouts.container')
@section('content')
    <form class="pt-5" method="POST" action="{{ route('login') }}">
        @csrf
        <center>
            <h3 class="fs-2">Entre com seu e-mail e senha para acessar sua conta</h3>
        </center>
        <div class="mb-3 pt-3">
            <label for="exampleFormControlInput1" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@diazen.com" value="teste@teste.com">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="**********" value="12345678">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="row pt-3">
            <div class="col-md-12 d-flex justify-content-center">
                <button class="btn btn-primary">
                    Acessar
                </button>
            </div>
        </div>
    </form>
@endsection
