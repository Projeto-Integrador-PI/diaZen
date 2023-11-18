<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiaZen</title>
    <!-- Incluindo CSS Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-4_5_2.min.css') }}">
    <!-- Incluindo fonte Quicksand -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <!-- Incluindo CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-5_1_3.min.css') }}">
    <!-- Incluindo FontAwesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/brands.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/regular.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/solid.min.css') }}">
    <!-- Incluindo CSS Custom -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    @yield('style')
</head>

<body>
 <!-- Container principal -->
    <div class="container-expand-lg">
        <!-- Linha para o menu -->
        <div class="menu menu-horizontal justify-content-center">
            <!-- Coluna para o botão de configurações -->
            <button id="btnConfig" class="btn btn-menu mx-3">
                <i class="fas fa-user-cog"></i>
            </button>

            <button id="btnHome" class="btn btn-menu mx-3">
                <i class="fas fa-home"></i>
            </button>

            <button id="btnCalendario" id="mesAtual" class="btn btn-menu">
                <i class="bi bi-calendar-check-fill"></i>
                <span class="mes-text">Novembro</span>
                <i class='fas fa-calendar-check'></i>
            </button>

            @if (!empty(auth()->user()))
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-menu">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </button>
                </form>
            @endif


        </div>
        <!-- Fim do menu -->
    </div>
    <!-- codigo de vcs-->
    <div class="container">
        @yield("content")
    </div>

    <div>

    <!-- Bibliotecas jQuery e Bootstrap JavaScript -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Incluindo FontAwesome -->
    <script src="{{ asset('assets/js/all.min.js')}}"></script>
    <script src="{{ asset('assets/js/brands.min.js')}}"></script>
    <script src="{{ asset('assets/js/conflict-detection.min.js')}}"></script>
    <script src="{{ asset('assets/js/fontawesome.min.js')}}"></script>
    <script src="{{ asset('assets/js/regular.min.js')}}"></script>
    <script src="{{ asset('assets/js/solid.min.js')}}"></script>
    <!-- Incluindo JS Custom -->
    <script src="{{ asset('assets/js/script.js')}}"></script>
    @yield("js")
</body>

</html>
