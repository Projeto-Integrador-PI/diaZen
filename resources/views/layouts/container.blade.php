<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiaZen</title>
    <!-- Incluindo CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-pzjw8w+ua6GJJ9O3e1pIQf5F5OpaW60aiJaUup+GhqS8JQ6qDYgCeFExlEVmW8bX"
        crossorigin="anonymous">
    <!-- Incluindo fonte Quicksand -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <!-- Incluindo CSS personalizado -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
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


        </div>
        <!-- Fim do menu -->
    </div>
    <!-- codigo de vcs-->
    <div class="container-fluid">
        @yield('content')
    </div>

    <div>

    <!-- Bibliotecas jQuery e Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha384-EIkY4waF+8FBH/h6cxfzntOW7c0MDAdoox9xEq+6yvq49Mw5fPeWjC+E7HcGTz6p"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-pzjw8w+ua6GJJ9O3e1pIQf5F5OpaW60aiJaUup+GhqS8JQ6qDYgCeFExlEVmW8bX"
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>
</body>

</html>