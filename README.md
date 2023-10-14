## Programas para rodar o projeto

- <a href='https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.4/xampp-windows-x64-8.2.4-0-VS16-installer.exe'>Xampp</a>
- <a href='https://getcomposer.org/Composer-Setup.exe'>Composer</a>
- <a href='https://www.heidisql.com/installers/HeidiSQL_12.5.0.6677_Setup.exe'>HeidiSQL - para acessar o banco de dados de forma mais fácil</a>

## Passos iniciais antes de clonar o projeto

- Instalar o Xampp disponibilizado acima;
- Instalar o Composer adicionando o PHP no patch do sistema operacional;
- *Atenção*: para executar o Xampp precisa executar ele como administrador do sistema;
- Como banco de dados é só usar o próprio MySQL instalado junto com o Xampp.

## Passos iniciais após clonar o projeto

- Renomear o arquivo '.env.example' para '.env';
- Executar o comando 'composer install';
- Configurar os dados do banco de dados dentro do '.env';
- Executar o comando 'php artisan key:generate';
- Executar o comando 'php artisan migrate';
- Para iniciar o projeto é preciso rodar o 'php artisan serve'.
