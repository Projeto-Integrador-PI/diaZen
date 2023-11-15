@extends('layouts.container')
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
        <div class="eventoDia">
            <div class="header">
                <p>
                    Eventos do dia
                </p>
                <img src="{{ asset('assets/icons/sinal-mais.svg') }}" alt="adcionar">
            </div>
            <div class="evento">
                <div class="left">
                    <h2>Reunião Projeto Integrador</h2>
                    <div class="infos">
                        <div class="info">Trabalho</div>
                        <div class="info">20:00</div>
                    </div>
                </div>
                <div class="right">
                    <img src="{{ asset('assets/icons/concluido.svg') }}" alt="concluido">
                </div>
            </div>
        </div>
    </main>
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
