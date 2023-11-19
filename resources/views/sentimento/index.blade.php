@extends("layouts.container")
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

  /* Nav bar - start */

  body {
    font-family: 'Quicksand', sans-serif;
    background-color: #F8F8EB;
    width: 100%;
}

.menu {
    width: 100%;
    border-radius: 10px;
    background-color: #65D2C6;
    padding: 2%;

}

.menu-horizontal {
    width: 100%;
    display: flex;
    align-items: center;

}

.btn-menu {
    font-size: 20px;
    color: #F8F8EB;
    background-color: #65D2C6;
    border-radius: 10px;
    border: none;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 10%;
}

.titulo-centralizado {
    margin-top: 20px;
}

.meta input[type="text"] {
    border: none;
    border-bottom: 1px solid #000;
    background: transparent;
    padding: 2px;
    color: #000;
}

.btn-menu:hover {
    background-color: #CEF2E2;
    color: #9C62AA;
    border: none;
}

.btn-menu:focus {
    outline: none;
}

.btn-menu:active {
    background-color: #CEF2E2;
    color: #6A6A6A;
    border: none;
}

.btn-menu:disabled {
    background-color: transparent;
    color: #9C62AA;
}

.mes-text {
    margin-left: 5px;
    margin-right: 5px;
}

  /* Nav bar - ending */

body {
  margin: 0;
  padding: 0;
  font-family: 'Quicksand';
  background-color: var(--diazen-bg-color);
  color: var(--diazen-text-color);
}

body > div {
  margin-bottom: 2rem;
}

h1, h2, h3, h4, h5, h6 {
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

textarea:focus, input:focus, select:focus {
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

.container {
  margin: 2rem;
}

.fields {
  display: flex;
  flex-direction: column;
  row-gap: .8rem;
  margin-bottom: 4rem;
}

.fields > div {
  flex-grow: 1;
}

.fields > div > input {
  border: var(--diazen-border-size) solid var(--diazen-icon-and-outline-color);
  border-radius: .2rem;
  width: 100%;
  height: 3rem;
  background-color: var(--diazen-input-bg-color);
  padding-left: .5rem;
  box-sizing: border-box;
}

.fields > div > input:focus {
  border: var(--diazen-border-size) solid var(--diazen-icon-and-outline-color);
}

.fields > div > div {
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

.default-button > div {
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

.default-button > div:active {
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


  .btn-primary{
    position: relative;
    display: flex;
    border-radius: 10px;
    align-items: center;
    width: 150px; /* Largura desejada */
    height: 40px;
    justify-content: center;
    background-color: #65D2C6;
    color:  #F8F8EB;
    font-size: 15px;
    border: none;
    box-shadow: 0 2px 6px rgba(246, 235, 235, 0.3);

    }
    .btn-primary:hover{
        background-color: #9C62AA; /* Nova cor para o hover do botão "Cancelar" */
        color: #FFFFFF; /* Nova cor para o texto do hover */
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

.emotions div {
  padding: 0 1.2rem;
}

.fa-solid, .emotions p {
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

.resized-text{
  height: 115px;
}
.emotion-btn {
      background: none;
      border: none;
      cursor: pointer;
      text-align: center;
    }

    .emotion-btn img {
      max-width: 100%;
      height: auto;
    }

    .emotions p {
      text-align: center;
    }

    .small-button {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 3rem;
}

.small-button > div {
  margin: 50px;
}

.small-button > div:first-child {
  margin-right: 100px;
}

.small-button > div:last-child {
  margin-left: 50px;
}


</style>
@endsection
@section("content")

  <div class="content">
    <div class="container">
      <div class="message-sentimento">
        <h1>Sentimento</h1>
        <h2>Como você está se sentindo hoje?</h2>
      </div>
      <div class="row emotions">
        <div class="col-md">
          <button class="emotion-btn" onclick="selectEmotion('Em paz')">
            <i class="fa-solid fa-face-smile-beam fa-2x" style="color: #9c62aa;"></i>
            <p>Em paz</p>
          </button>
        </div>
        <div class="col-md">
          <button class="emotion-btn" onclick="selectEmotion('Feliz')">
            <i class="fa-solid fa-face-smile fa-2x" style="color: #65d2c6;"></i>
            <p>Feliz</p>
          </button>
        </div>
        <div class="col-md">
          <button class="emotion-btn" onclick="selectEmotion('Neutro')">
            <i class="fa-solid fa-face-meh-blank fa-2x" style="color: #9c62aa;"></i>
            <p>Neutro</p>
          </button>
        </div>
        <div class="col-md">
          <button class="emotion-btn" onclick="selectEmotion('Triste')">
            <i class="fa-solid fa-face-sad-tear fa-2x" style="color: #9c62aa;"></i>
            <p>Triste</p>
          </button>
        </div>
        <div class="col-md">
          <button class="emotion-btn" onclick="selectEmotion('Raiva')">
            <i class="fa-solid fa-face-angry fa-2x" style="color: #9c62aa;"></i>
            <p>Raiva</p>
          </button>
        </div>
      </div>
      <form action="" class="fields">
        <label for="sbom">O que houve de bom?</label>
        <input type="text" id="sbom" placeholder="Digite aqui...">
        <label for="sruim">O que houve de ruim?</label>
        <input type="text" id="sruim" placeholder="Digite aqui...">
        <label for="sobs">Alguma observação?</label>
        <input type="text" id="sobs" placeholder="Digite aqui..." class="resized-text">
      </form>
      <div class="small-button">
        <div>
          <button class="btn btn-primary" type="button">Cancelar</button>
        </div>
        <div>
          <button class="btn btn-primary " type="button" >Salvar</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    function selectEmotion(emotion) {
      alert("Emotion selected: " + emotion);
      // You can perform additional actions here
    }
  </script>
  @endsection
