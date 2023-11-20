<?php

namespace App\Http\Controllers;

use App\Services\DailyService;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        return view('acesso.index');
    }

    public function dashboard()
    {
        $dateNow = Carbon::now();
        return view('dashboard.index', [
            'dateNow' => $dateNow->format('d/m/Y'),
            'dayWeek' => $dateNow->format('l'),
            'dates' => DailyService::getDailyFiveReg()
        ]);
    }
}
