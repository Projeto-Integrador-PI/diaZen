<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Http\Requests\EventsRequest;
use App\Models\CategoryEvents;
use App\Services\EventsService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    public function index(): View
    {
        return view('events.index', ['events' => Events::all()]);
    }

    public function create(): View
    {
        return view('eventos.create',[
            'categories' => CategoryEvents::all()
        ]);
    }

    public function store(EventsRequest $request): RedirectResponse
    {
        // dd(EventsService::prepareDataToSave($request));
        try {
            $newEvent = DB::transaction(function () use($request)  {
                return Events::create(EventsService::prepareDataToSave($request));
            });
            return redirect()->route('home.index');
        } catch (\Throwable $error) {
            dd($error);
            return redirect()->back()->withErrors($error);
        }
    }

    public function show(Events $events): View
    {
        return view('events.show', ['event' => $events]);
    }

    public function edit(Events $events): View
    {
        return view('events.edit', ['event' => $events]);
    }

    public function update(EventsRequest $request, Events $events): RedirectResponse
    {
        try {
            $events = DB::transaction(function () use($request, $events) {
                $events = $events->update($request->all());
            });
            return redirect()->route('events.index');
        } catch (\Throwable $error) {
            return redirect()->back()->withErrors($error);
        }
    }

    public function destroy(Events $events): RedirectResponse
    {
        try {
            $events = DB::transaction(function () use($events) {
                $events->delete();
            });
            return redirect()->route('events.index');
        } catch (\Throwable $error) {
            return redirect()->back()->withErrors($error);
        }
    }
}
