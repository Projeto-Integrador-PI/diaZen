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

</style>
@endsection
@section("content")
<form class="container mt-5" method="POST"
@if (!empty($feelings))
    action="{{ route('events.setFeeling', ['event' => $event->id] ) }}"
@endif
@if (empty($feelings))
    action="{{ route('events.update', ['event' => $event->id] ) }}"
@endif
>
    @csrf
    @if (empty($feelings))
        @method('put')
        <h1 class="titulo">Atualizar evento</h1>
    @endif
    @if (!empty($feelings))
        <h1 class="titulo">Informar o sentimento referente ao evento</h1>
    @endif

    @include('eventos.components.title-date')

    @if (!empty($feelings))
        <div class="pt-3">
            @include('sentimento.components.feeling')
        </div>
    @endif
    @if (!empty($categories))
        <div class="form-group mt-4">
            <div class="form-floating">
                <select class="form-select" id="category" name="category" aria-label="Floating label select example">
                    <option value="">Selecione uma categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id}}" {{ ($category->id == $event->category_id) ? 'selected' : ''}}>{{ $category->name }}</option>
                    @endforeach
                </select>
                <label for="category">Categoria</label>
            </div>
        </div>
    @endif

    <div class="row mt-4">
        <div class="col">
            <a href="{{ route('calendar.index') }}" class="btn btn-secondary3">Cancelar</a>
        </div>
        <div class="col text-right">
            <button class="btn btn-primary3" type="submit">Salvar</button>
        </div>
    </div>
</form>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.2/dist/umd/popper.min.js"></script>

@endsection
