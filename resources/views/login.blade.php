<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('main.css') }}">
  <title>Login</title>
</head>
<body>
    <div class="header">
        <div class="header-item">BACK ICON</div>
        <div class="header-item">HOME ICON</div>
        <div class="header-item">OTHER ICON</div>
    </div>
    <div class="content">
        <div class="container">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <h2>Entre com seu e-mail e senha para acessar sua conta</h2>
                <div class="fields">
                    <div>
                        <div class="label">E-mail</div>
                        <input type="email" name="email" placeholder="user@example.com" required>
                    </div>
                    <div>
                        <div class="label">Senha</div>
                        <input type="password" name="password" placeholder="********" required>
                    </div>
                </div>
                <div class="default-button">
                    <div>
                        Acessar conta
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
