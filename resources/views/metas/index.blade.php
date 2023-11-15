@extends("layouts.container")
@section("style")
<style>
    .meta input[type="text"] {
      flex-grow: 1;
      margin-right: 10px;
      padding: 2px;
      background-color: #F8F8EB;
      border-color:  rgb(235, 165, 165);
    }
    input[type="checkbox"] {
    width: 20px;
    height: 20px;
    border: 2px solid #973c6e;
    border-radius: 3px;
    outline: none;

    margin-right: 10px;

  }
  input[type="checkbox"]:checked {
    border-color: #50f0f6;
    background-color: #50f0f6;
    color: #973c6e;
    margin-right: 10px;
  }

  .meta .edit-button,
    .meta .delete-button {
        cursor: pointer;
        color: #973c6e;
        margin-right: 10px;
        font-size: 20px;
    }

    .add1-button {
      position: absolute;
      top: 85%;
      left: 50%;
      transform: translate(-50%, -50%);
      display: flex;
      width: 60px;
      height: 60px;
      margin-bottom: 50%;
      border-radius: 50%;
      align-items: center;
      justify-content: center;
      background-color: #50f0f6;
      color: #287b6b;
      font-size: 24px;
      border: none;
      box-shadow: 0 2px 6px rgba(246, 235, 235, 0.3);
    }
    </style>

@endsection
@section("content")

<h1 class="titulo-centralizado">Metas</h1>

          <div class="container mt-4">

            <div id="listaMetas">
            </div>

            <button id="btnAdicionar" class="add1-button"><i class="fas fa-plus"></i></button>

          </div>

@endsection
@section("js")
<script>

            var metas = [];

            function adicionarMeta() {
                var novaMetaInput = $("<input>").attr("type", "text");
                var novaMeta = $("<div>").addClass("meta");

                // Adicionar a classe "checked" por padrão
                novaMeta.toggleClass("checked");

                novaMeta.append(novaMetaInput);

                var checkButton = $("<input>").attr("type", "checkbox");
                checkButton.change(function () {
                    var meta = $(this).parent();

                    // Alternar a classe "checked" ao clicar
                    meta.toggleClass("checked");
                    meta.find("input[type='text']").toggleClass("text-decoration-line-through");
                });

                var editButton = $("<i>").addClass("edit-button fas fa-paint-brush");
                editButton.click(function () {
                    var meta = $(this).parent();
                    var input = meta.find("input[type='text']");
                    input.prop("disabled", false).focus();
                });

                var deleteButton = $("<i>").addClass("delete-button fas fa-times");
                deleteButton.click(function () {
                    $(this).parent().remove();
                });

                novaMeta.append(checkButton, editButton, deleteButton);
                $("#listaMetas").append(novaMeta);

                novaMetaInput.focus();
                novaMetaInput.keypress(function (e) {
                    if (e.which === 13) {
                        e.preventDefault();
                        $(this).prop("disabled", true);
                    }
                });
            }

            $("#btnAdicionar").click(adicionarMeta);

          </script>

@endsection
