@extends('layouts.container')
@section('style')
<style>
    .date-item {
        height: 300px;
        width: 300px;
        border-radius: 50%;
        background-color: #9C62AA;
    }
    .date-item a {
        text-decoration: none;
    }
    .date-item a h3 {
        font-size: 50px;
    }
    #events-card {
        width: 100%;
        min-height: 300px;
    }
    #events-card a {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background-color: #CEF2E2;
    }
    .card-title {
        font-size: 50px;
    }
    table {
        background-color: white;
    }
</style>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 d-flex justify-content-center pt-5">
        <div class="date-item d-flex align-items-center justify-content-center">
            <a href="#" class=" link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover pt-auto">
                <h3 class="text-light">{{ $dateNow }}</h3>
                <h5 class="text-light"><center>{{ $dayWeek }}</center></h5>
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 d-flex justify-content-center pt-5">
        <div class="card" id="events-card">
            <div class="card-body">
                <h3 class="card-title"><center>Sentimento</center></h3>
                <div class="d-flex align-items-center justify-content-center pt-4">
                    <a href="{{ route('daily.create') }}" class="d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-plus" style="color: #9c62aa;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 d-flex justify-content-center pt-5">
        <div class="card" id="events-card">
            <div class="card-body">
                <h3 class="card-title"><center>Evento</center></h3>
                <div class="d-flex align-items-center justify-content-center pt-4">
                    <a href="{{ route('events.create') }}" class="d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-plus" style="color: #9c62aa;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row pt-2">
    <table class="table">
    <thead>
        <tr>
            <th scope="col" colspan="3">
                <center>Histórico</center>
            </th>
            {{-- <th>
                <a href="{{ route('hist.index') }}" title="Ver todos os eventos">
                    <i class="fa-solid fa-list"style="color: #9c62aa;"></i>
                </a>
            </th> --}}
        </tr>
        <tr scope="col">
            <th scope="col">Dia</th>
            <th scope="col">Sentimento</th>
            <th scope="col">Nome</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @forelse ($dates as $data)
            <tr>
                <td>{{ $data->dateFormat($data) }}</td>
                <td>
                    @include('eventos.components.feeling-icon')
                </td>
                <td>{{ $data->description }}</td>
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
@endsection
