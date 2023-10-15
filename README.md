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

## Criando nova branch para desenvolvimento

- Verificar se está na branch main, usar comando 'git branch';
- Se exiter na branch main, use o comando 'git checkout -b <nome_da_branch/#numero_da_issue_aberta>'. **Exemplo**:
```
git checkout -b anotso/#1
```
- Caso não esteja na branch main use o comando 'git checkout main';
- Na branch main execute o 'git pull origin main' **antes de iniciar o desenvolvimento de qualquer nova atividade**;
- Caso não exista issue aberta no repositório do projeto é só cria-lá. Caso seja destinada para um outro integrante é só informar no grupo e passar a URL para a pessoa.
