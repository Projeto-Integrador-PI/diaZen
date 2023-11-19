<?php

namespace App\Http\Controllers;

use App\Models\Daily;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        return view('hist.index', ['hists' => Daily::all()]);
    }
}
