
<img align="right" alt="logo-compass" height="100" src="https://i.ibb.co/0nq71pK/LOGO-1.png"> 


# Projeto Integrador - DiaZen

O DiaZen tem como objetivo auxiliar pessoas com ansiedade e/ou depressão a alcançarem seus objetivos, servindo como uma ferramenta de autoconhecimento. O aplicativo oferece diversos benefícios para pessoas que têm dificuldade em realizar suas tarefas desejadas, o que é comum em pessoas com ansiedade e/ou depressão:
- Engajamento da expressão dos pensamentos;
- Auxiliar o usuário a descobrir e/ou redescobrir experiências.
- Melhor entendimento das limitações individuais para que possam ser trabalhadas, a fim de serem superadas;
- Apoio no alcance de objetivos;
- Ao conquistar metas pessoais atua na elevação da autoestima;

## Tópicos
   * [Sobre o projeto](#sobre-o-projeto)
   * [O projeto DiaZen](#o-projeto-diazen)
   * [Instalando o projeto](#instalando-o-projeto)
      * [Pré-requisitos](#pré-requisitos)
      * [Preparando o ambiente](#preparando-o-ambiente)
   * [Executando o projeto](#executando-o-projeto)
      * [Passos iniciais após clonar o repositório](#passos-iniciais-após-clonar-o-repositório)
      * [Criando nova branch para desenvolvimento](#criando-nova-branch-para-desenvolvimento)  
   * [Estrutura Conceitual Externa](#estrutura-conceitual-externa)
   * [Tecnologias Utilizadas](#tecnologias-utilizadas)
   * [Autores](#autores)

## Sobre o projeto 

Apresentado ao Centro Universitário Senac, como exigência parcial para obtenção de aprovação na disciplina Projeto Integrador IV, do curso de Análise e Desenvolvimento de Sistemas.

## O projeto DiaZen

<p align="center">Menu</p>
<p align="center">
<img alt="menu" height="400" src="https://i.imgur.com/mSo3ugR.jpg">
</p>

<p align="center">Inscrição</p>
<p align="center">
<img alt="menu" height="400" src="https://i.imgur.com/crTUKae.jpg">
</p>

<p align="center">Login</p>
<p align="center">
<img alt="menu" height="400" src="https://i.imgur.com/YYuszlp.jpg">
</p>

<p align="center">Configurações</p>
<p align="center">
<img alt="menu" height="400" src="https://i.imgur.com/mHKAkrQ.jpg">
</p>

<p align="center">Fale Conosco</p>
<p align="center">
<img alt="menu" height="400" src="https://i.imgur.com/og7sFUW.jpg">
</p> 

<p align="center">Doações</p>
<p align="center">
<img alt="menu" height="400" src="https://i.imgur.com/HqopurQ.jpg">
</p> 

<p align="center">Adicionar evento</p>
<p align="center">
<img alt="menu" height="400" src="https://i.imgur.com/dsZbPCy.jpg">
</p> 

<p align="center">Cadastro Sentimento</p>
<p align="center">
<img alt="menu" height="400" src="https://i.imgur.com/vBbkazl.jpg">
</p> 

<p align="center">Menu</p>
<p align="center">
<img alt="menu" height="400" src="https://i.imgur.com/Q0viwbE.jpg">
</p> 

<p align="center">Atualizar evento</p>
<p align="center">
<img alt="menu" height="400" src="https://i.imgur.com/de9VEKX.jpg">
</p> 

<p align="center">Calendário</p>
<p align="center">
<img alt="menu" height="400" src="https://i.imgur.com/RBET8oO.jpg">
</p> 

<p align="center">Termos e Condições</p>
<p align="center">
<img alt="menu" height="400" src="https://i.imgur.com/g8Mv0xN.jpg">
</p> 

## Instalando o projeto 

### Pré-requisitos 

- <a href='https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.4/xampp-windows-x64-8.2.4-0-VS16-installer.exe'>Xampp</a>: pacote que contém os componentes MySQL e PHP;
- <a href='https://getcomposer.org/Composer-Setup.exe'>Composer</a>: ferramenta de gerenciamento de dependências em PHP;
- <a href='https://www.heidisql.com/installers/HeidiSQL_12.5.0.6677_Setup.exe'>HeidiSQL</a>: utilizado para acessar o banco de dados.

### Preparando o ambiente 

1. Instale o Xampp;
2. Instale o Composer adicionando o PHP no patch do sistema operacional;
3. Instale o HeidiSQL.
> *Atenção*: para executar o Xampp é necessário executá-lo como administrador do sistema.

## Executando o projeto 

### Passos iniciais após clonar o repositório

1. Renomeie o arquivo '.env.example' para '.env';
2. Execute o comando ```composer install```;
3. Configure os dados do banco de dados dentro de '.env';
4. Execute o comando ```php artisan key:generate```;
5. Execute o comando ```php artisan migrate```;
6. Inicie o projeto através do comando ```php artisan serve```.

### Criando nova branch para desenvolvimento

1. Verifique a sua branch atual utilizando o comando ```git branch```;
2. Na branch main, use o comando  ```git checkout -b <nome_da_branch/#numero_da_issue_aberta>```.
<br> **Exemplo**: ```git checkout -b anotso/#1``` <br>
3. Use o comando ```git checkout main```; 
4. Na branch main, execute o ```git pull origin main``` **antes de iniciar o desenvolvimento de qualquer nova atividade**.
> Caso não exista issue aberta no repositório do projeto é só cria-lá. Caso seja destinada para um outro integrante é só informar no grupo e passar a URL para a pessoa.

## Estrutura Conceitual Externa

Foram desenvolvidos esboços com a ideia por trás do projeto, seguido pela fase escrita do <a href="https://docs.google.com/document/d/1SsjEH9fb66FyAfGV1c4hbiNis-jQJqu1K6kDHmtG2fo/edit?usp=sharing">Projeto Formal</a>. Com o uso da ferramenta Figma foi produzido um <a href="https://www.figma.com/file/67pnggN5p9U33kzKVn5T9H/Prot%C3%B3tipo-DiaZen---Projeto-Integrador-Grupo-08?type=design&node-id=0%3A1&mode=design&t=dTaaoBSXYjkMBOlY-1">Modelo Visual Interativo</a> a ser seguido no desenvolvimento de front end e para a produção técnica, foi utilizado múltiplos conhecimentos da equipe.

## Tecnologias Utilizadas

PHP 8.2, Laravel v10, banco de dados MySQL v8, Bootstrap v5, Jquery v3.8 e Font Awesome 6.

![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/bootstrap-%238511FA.svg?style=for-the-badge&logo=bootstrap&logoColor=white)
![jQuery](https://img.shields.io/badge/jquery-%230769AD.svg?style=for-the-badge&logo=jquery&logoColor=white)

## Autores

<a href="https://github.com/Adassalifer">Adassa Jeanneffer Lima Ferreira</a><br>
<a href="https://github.com/AmandaBritoPereira">Amanda Brito Pereira</a><br>
<a href="https://github.com/christian-lelis">Christian De Lelis Santana Ferreira</a><br>
<a href="https://github.com/Claudemirdev">Claudemir Alexandre Silva De Vasconcelos</a><br>
<a href="https://github.com/DionisioFlavio">Flávio Oliveira Dionisio</a><br>
<a href="https://github.com/Floritcha">Flora Cristina De Souza Guijarro</a><br>
<a href="https://github.com/gabrielzom">Gabriel Sales Do Nascimento</a><br>
<a href="https://github.com/Anotso">Gracilliano Dos Anjos Carvalho</a><br>
<a href="https://github.com/manoellasouza/">Manoella Souza</a>