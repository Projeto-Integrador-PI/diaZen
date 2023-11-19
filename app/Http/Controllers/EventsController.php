<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Http\Requests\EventsRequest;
use App\Models\CategoryEvents;
use App\Models\Feelings;
use App\Services\EventsService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class EventsController extends Controller
{
    public function index(): View
    {
        return view('eventos.index', [
            'pastEvents' => EventsService::pastEvents(),
            'nextEvents' => EventsService::nextEvents()
        ]);
    }

    public function create(): View
    {
        return view('eventos.create',[
            'categories' => CategoryEvents::all()
        ]);
    }

    public function store(EventsRequest $request): RedirectResponse
    {
        try {
            $newEvent = DB::transaction(function () use($request)  {
                return Events::create(EventsService::prepareDataToSave($request));
            });
            return redirect()->route('calendar.index');
        } catch (\Throwable $error) {
            dd($error);
            return redirect()->back()->withErrors($error);
        }
    }

    public function show(Events $events): View
    {
        return view('eventos.show', ['event' => $events]);
    }

    public function edit(Events $event): View
    {
        return view('eventos.edit', [
            'event' => $event,
            'categories' => CategoryEvents::all()
        ]);
    }

    public function update(EventsRequest $request, Events $event): RedirectResponse
    {
        try {
            $event = DB::transaction(function () use($request, $event) {
                $event = $event->update(EventsService::prepareDataToUpdate($request));
            });
            return redirect()->route('calendar.index');
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

    public function feeling(Events $event): View
    {
        return view('eventos.edit', [
            'event' => $event,
            'feelings' => Feelings::all()
        ]);
    }

    public function setFeeling(Events $event): RedirectResponse
    {
        $event->feeling_id = request('feeling');
        $event->save();
        return redirect()->route('calendar.index');
    }
}
