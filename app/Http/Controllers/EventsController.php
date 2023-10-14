<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Http\Requests\StoreEventsRequest;
use App\Http\Requests\UpdateEventsRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EventsController extends Controller
{
    public function index(): View
    {
        return view('events.index', ['events' => Events::all()]);
    }

    public function create(): View
    {
        return view('events.create');
    }

    public function store(StoreEventsRequest $request): RedirectResponse
    {
        return redirect()->route('events.index');
    }

    public function show(Events $events): View
    {
        return view('events.show', ['event' => $events]);
    }

    public function edit(Events $events): View
    {
        return view('events.edit', ['event' => $events]);
    }

    public function update(UpdateEventsRequest $request, Events $events): RedirectResponse
    {
        return redirect()->route('events.index');
    }

    public function destroy(Events $events): RedirectResponse
    {
        return redirect()->route('events.index');
    }
}
