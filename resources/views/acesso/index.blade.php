@extends('layouts.container')
@section('style')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@400;700;900&display=swap');

        :root {
            --diazen-bg-color: #F8F8EB;
            /* --diazen-icon-and-outline-color: #D59BE3; */
            --diazen-icon-and-outline-color: #9c62aa;
            --diazen-text-color: #6A6A6A;
            --diazen-header-btn-color: #65D2C6;
            --diazen-div-text-bg-color: #CEF2E2;
            --diazen-div-transition-color: #EFFFF8;
            --diazen-line-outline-text-color: #E9D3EE;
            --diazen-placeholder-fields-color: #9E9B9B;
            --diazen-input-bg-color: #FFFFE2;
            --diazen-h1-size: 1.25rem;
            --diazen-h2-size: 1.125rem;
            --diazen-btn-size: 1rem;
            --diazen-text-size: 0.875rem;
            --diazen-border-size: 0.0625rem;
            --diazen-border-radius: 0.625rem;
        }



        body {
            margin: 0;
            padding: 0;
            font-family: 'Quicksand';
            background-color: #f5f5f5;
            color: var(--diazen-text-color);
        }

        body>div {
            margin-bottom: 2rem;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            /* color: var(--diazen-icon-and-outline-color); */
            color: var(--diazen-text-color);
            font-weight: 400;
        }

        h1 {
            font-size: var(--diazen-h1-size);
        }

        h2 {
            font-size: var(--diazen-h2-size);
        }

        textarea:focus,
        input:focus,
        select:focus {
            box-shadow: 0 0 0 0;
            border: 0 none;
            outline: 0;
        }

        input::placeholder {
            color: var(--diazen-placeholder-fields-color);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-height: 3rem;
            max-height: 5rem;
            background-color: var(--diazen-header-btn-color);
            padding: .5rem 2rem;
        }

        .header-item {
            color: var(--diazen-bg-color);
            font-weight: 600;
        }

        .fields {
            display: flex;
            flex-direction: column;
            row-gap: .8rem;
            margin-bottom: 4rem;
        }

        .fields>div {
            flex-grow: 1;
        }

        .fields>div>input {
            border: var(--diazen-border-size) solid var(--diazen-icon-and-outline-color);
            border-radius: .2rem;
            width: 100%;
            height: 3rem;
            background-color: var(--diazen-input-bg-color);
            padding-left: .5rem;
            box-sizing: border-box;
        }

        .fields>div>input:focus {
            border: var(--diazen-border-size) solid var(--diazen-icon-and-outline-color);
        }

        .fields>div>div {
            font-size: var(--diazen-text-size);
            margin-left: .5rem;
            padding: .1rem;
            border-radius: .3rem;
            color: var(--diazen-icon-and-outline-color);
            background-color: var(--diazen-div-text-bg-color);
            max-width: fit-content;
        }

        .default-button {
            display: flex;
            justify-content: center;
            /* Adicionado o margin */
            margin: 3rem 0;
        }

        .default-button>div {
            padding: 1rem 0;
            width: 230px;
            text-align: center;
            border: var(--diazen-border-size) solid var(--diazen-icon-and-outline-color);
            border-radius: var(--diazen-border-radius);
            /* color: var(--diazen-icon-and-outline-color); */
            color: var(--diazen-text-color);
            background-color: var(--diazen-div-text-bg-color);
            height: 1rem;
            cursor: pointer;
            transition: background-color .5s ease-in-out;
        }

        .default-button>div:active {
            transition: background-color .1s ease-in-out;
            background-color: var(--diazen-div-transition-color);
        }

        .border-bottom {
            border: none !important;
            border-bottom: var(--diazen-border-size) solid var(--diazen-icon-and-outline-color) !important;
            background-color: var(--diazen-bg-color) !important;
            padding: 0 !important;
            height: 2rem !important;
        }

        .without-bg-color {
            margin-left: 0 !important;
            background-color: var(--diazen-bg-color) !important;
        }

        .spacing {
            margin-top: 4rem !important;
        }

        .spacing div {
            margin-top: .7rem !important;
        }


        /* Ideia de botão 2 */
        .small-button {
            display: flex;
            justify-content: center;
        }

        .small-button>div {
            padding: 1rem 0;
            width: 130px;
            text-align: center;
            border-radius: var(--diazen-border-radius);
            color: var(--diazen-bg-color);
            background-color: var(--diazen-header-btn-color);
            height: 1rem;
            cursor: pointer;
            transition: background-color .5s ease-in-out;
            margin: auto;
        }

        .small-button>div:active {
            transition: background-color .1s ease-in-out;
            background-color: var(--diazen-div-transition-color);
        }


        /* Demais inserções ao CSS */

        .message-acesso {
            text-align: center;
            margin: 9rem 0;
        }

        .message-sentimento {
            text-align: center;
            margin: 3rem 0;
        }

        .emotions {
            display: flex;
            justify-content: center;
            flex-direction: row;
        }

        .fa-solid,
        .emotions p {
            padding: 0 0.8rem;
        }


        label {
            text-align: center;
            margin-top: 0.8em;
            font-size: 18px;
        }

        input[type=text] {
            width: 100%;
            padding: 18px;
            font-family: Quicksand;
            border: var(--diazen-border-size) solid var(--diazen-icon-and-outline-color);
            border-radius: var(--diazen-border-radius);
            box-sizing: border-box;
            background-color: #F8F8EB;

        }

        .resized-text {
            height: 115px;
        }



        /* Estilo para o botão "Acessar conta" */
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
    <div class="container">
        <div class="content">
            <div class="message-acesso">
                <h1>Bem-vindo(a)</h1>
                <h2>Entre com sua conta ou crie uma nova para acessar o conteúdo</h2>
            </div>
            <div class="default-button">
                <a class="btn btn-acessar" href="{{ route('login') }}">Acessar conta</a>
            </div>
            <div class="default-button">
                <a class="btn btn-criar" href="{{ route('register') }}">Criar nova conta</a>
            </div>
        </div>
    </div>
@endsection
