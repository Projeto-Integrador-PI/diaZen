@if (empty($feelings))
    <div class="form-group mt-4">
        <label for="calendario">Data e Hora do Evento</label>
        <input type="datetime-local" class="form-control" id="calendario" name="date" value="{{ $event->date.' '.$event->hour }}">
    </div>
@endif

<div class="form-group mt-4">
    <label for="titulo">Nome do Evento</label>
    <input type="text" class="form-control" id="titulo" placeholder="Digite aqui..." name="name"
        value="{{ $event->name }}"
        @if (!empty($feelings))
            disabled
        @endif
    >
</div>
