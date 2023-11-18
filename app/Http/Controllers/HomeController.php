<?php

namespace App\Http\Controllers;

use App\Services\EventsService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $dateNow = Carbon::now();
        // setlocale(LC_TIME, 'Brazil');
        return view('dashboard.index', [
            'dateNow' => $dateNow->format('d/m/Y'),
            'dayWeek' => $dateNow->format('l'),
            'dates' => EventsService::nextEvents()
        ]);
    }
}
