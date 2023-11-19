@extends('layouts.container')
@section('content')
<div class="row pt-2">
    <div class="col-md-6">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="3">Eventos passados</th>
                </tr>
                <tr>
                    <th scope="col">Dia</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sentimento</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pastEvents as $data)
                    <tr>
                        <td>{{ $data->dateFormat($data)}}</td>
                        <td>{{ $data->name}}</td>
                        <td>
                            @if (!empty($data->feeling_id))
                                @include('eventos.components.feeling-icon')
                            @endif
                            @if (empty($data->feeling_id))
                            <center>
                                <a href="{{ route('events.edit', ['event'=> $data->id]) }}">
                                    <i class="fa-solid fa-person-breastfeeding" title="Atribuir sentimento"></i>
                                </a>
                            </center>
                            @endif
                        </td>
                    </tr>
                @empty
                    <td colspan="3">
                        <center>Dados não encontrados</center>
                    </td>
                @endforelse
            </tbody>
          </table>
    </div>
    <div class="col-md-6">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" colspan="3">
                        <center>Eventos agendados</center>
                    </th>
                </tr>
                <tr scope="col">
                    <th scope="col">Dia</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse ($nextEvents as $nextEvent)
                    <tr>
                        <td>{{ $nextEvent->dateFormat($nextEvent)}}</td>
                        <td>{{ $nextEvent->name}}</td>
                        <td>
                            <a href="{{ route('events.edit', ['event'=> $nextEvent->id]) }}">
                                <i class="fa-solid fa-pen" title="Editar evento"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">
                            <center>Dados não encontrados</center>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
