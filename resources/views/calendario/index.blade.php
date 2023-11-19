@extends('layouts.container')
@section('style')
<style>
    table {
        background-color: white;
    }
</style>
@endsection
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/style-calendario.css') }}">
    <main>
        <h1>Calendário</h1>
        <div class="calendar">
            <div class="header">
                <button id="prevBtn">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <div class="monthYear" id="monthYear"></div>
                <button id="nextBtn">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
            <div class="container">
                <div class="days">
                    <div class="day">Dom</div>
                    <div class="day">Seg</div>
                    <div class="day">Ter</div>
                    <div class="day">Qua</div>
                    <div class="day">Qui</div>
                    <div class="day">Sex</div>
                    <div class="day">Sab</div>
                </div>
                <div class="dates" id="dates"></div>
            </div>
        </div>

    </main>
    <div class="row">
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="3"><center>Eventos passados</center></th>
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
                                    <a href="{{ route('events.feeling', ['event'=> $data->id]) }}">
                                        <i class="fa-solid fa-person-breastfeeding" title="Atribuir sentimento"style="color: #9c62aa;"></i>
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
                                    <i class="fa-solid fa-pen" title="Editar evento"style="color: #9c62aa;"></i>
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
@section('js')
    <script>
        const monthYearElement = document.getElementById('monthYear');
        const datesElement = document.getElementById('dates');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        let currentDate = new Date();

        const updateCalendar = () => {
            const currentYear = currentDate.getFullYear();
            const currentMonth = currentDate.getMonth();

            const firstDay = new Date(currentYear, currentMonth, 1);
            const lastDay = new Date(currentYear, currentMonth + 1, 0);
            const totalDays = lastDay.getDate();

            const firstDayIndex = firstDay.getDay();
            const lastDayIndex = lastDay.getDay();

            const monthYearString = currentDate.toLocaleString('default', {
                month: 'long',
                year: 'numeric'
            });
            monthYearElement.textContent = monthYearString;

            let datesHTML = '';

            for (let i = firstDayIndex; i > 0; i--) {
                const prevDate = new Date(currentYear, currentMonth, 0 - i + 1);
                datesHTML += `<div class="date inactive">${prevDate.getDate()}</div>`;
            }

            for (let i = 1; i <= totalDays; i++) {
                const date = new Date(currentYear, currentMonth, i);
                const activeClass = date.getFullYear() === currentDate.getFullYear() &&
                    date.getMonth() === currentDate.getMonth() &&
                    date.getDate() === currentDate.getDate() ? 'active' : '';
                datesHTML += `<div class="date ${activeClass}">${i}</div>`;
            }

            for (let i = 1; i <= 6 - lastDayIndex; i++) {
                const nextDate = new Date(currentYear, currentMonth + 1, i);
                datesHTML += `<div class="date inactive">${nextDate.getDate()}</div>`;
            }

            datesElement.innerHTML = datesHTML;
        };

        prevBtn.addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() - 1);
            updateCalendar();
        });

        nextBtn.addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() + 1);
            updateCalendar();
        });

        updateCalendar();
    </script>
@endsection
