@extends("layouts.container")
@section('style')
<style>
    .titulo{
     font-size: 30px;
    }
    #calendario:focus {
        border-color: #65D2C6; /* Cor da borda quando focado */
        box-shadow: 0 0 0 0.2rem rgba(100, 227, 217, 0.25); /* Sombra quando focado */
    }
    #titulo:focus{
        border-color: #65D2C6; /* Cor da borda quando focado */
        box-shadow: 0 0 0 0.2rem rgba(100, 227, 217, 0.25); /* Sombra quando focado */
    }
    #categoria:focus{
        border-color: #65D2C6; /* Cor da borda quando focado */
        box-shadow: 0 0 0 0.2rem rgba(100, 227, 217, 0.25); /* Sombra quando focado */
    }


   .btn-primary3, .btn-secondary3{
    position: absolute;
    margin-top: 20%;
    margin-right: 20px;
    left: 50%;
    transform: translate(-50%, -50%);
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

    .btn-secondary3:hover { background-color: #9C62AA; /* Nova cor para o hover do botão "Cancelar" */
    color: #FFFFFF; /* Nova cor para o texto do hover */}
    .btn-primary3:hover{
        background-color: #9C62AA; /* Nova cor para o hover do botão "Cancelar" */
        color: #FFFFFF; /* Nova cor para o texto do hover */
    }
    .container{
        text-align: center;
    }

</style>
@endsection
@section("content")
<form class="container mt-5" action="{{ route('events.store') }}" method="POST">
    @csrf
    <h1 class="titulo">Adicionar evento</h1>

    @if (!empty($error))

    @endif

    <div class="form-group mt-4">
        <label for="calendario">Data e Hora do Evento</label>
        <input type="datetime-local" class="form-control" id="calendario" name="date">
    </div>

    <div class="form-group mt-4">
        <label for="titulo">Nome do Evento</label>
        <input type="text" class="form-control" id="titulo" placeholder="Digite aqui..." name="name">
    </div>

    <div class="form-group mt-4">
        {{-- <label for="categoria">Categoria</label>
        <div class="input-group">
            <input type="text" class="form-control" id="categoria" placeholder="Digite o nome da categoria: ex festa, apresentação...">
            <div class="input-group-append">
            </div>
        </div> --}}
        <div class="form-floating">
            <select class="form-select" id="category" name="category" aria-label="Floating label select example">
                <option value="">Selecione uma categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id}}">{{ $category->name }}</option>
                @endforeach
            </select>
            <label for="category">Categoria</label>
          </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <a href="{{ route('home.index') }}" class="btn btn-secondary3">Cancelar</a>
        </div>
        <div class="col text-right">
            <button class="btn btn-primary3" type="submit">Salvar</button>
        </div>
    </div>
</form>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.2/dist/umd/popper.min.js"></script>

@endsection
