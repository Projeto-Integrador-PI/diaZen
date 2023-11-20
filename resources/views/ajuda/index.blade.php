@extends("layouts.container")
@section("content")

<style>

    .Button-icon {
        font-size: 20px;

    }

    .content {
        margin-top: 100px;
        text-align: center;
        padding: 20px;
    }

    .form-container {
        text-align: center;
        width: 80%;
        max-width: 400px;
        margin: 0 auto;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin: 30px 0;
        height: 150px;
        border-radius: 15px;
        border-color:#9C62AA;
        background-color: #f5f5f5;
        margin-top: 10px;
        word-wrap: break-word;

    }


    label {
        display: block;

    }

    #enviar-button {
        text-size-adjust: 20px;
        padding: 10px 20px;
        background-color: #65D2C6;
        color: #fff;
        border: 5px;
        border-radius: 15px;
        cursor: pointer;
    }
        </style>

        <div class="content">
            <div class="form-container">
                <form>
                    <label for="descricao">Fale conosco</label>
                    <input placeholder="Digite aqui..."   type="text" id="descricao" name="descricao"
                        placeholder="Descreva seu problema">
                    <br>
                    <button id="enviar-button">
                        <div class="Button-icon">✔️ Enviar </div>
                    </button>
                </form>
            </div>
        </div>

        <div>

@endsection
