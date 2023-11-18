<?php

namespace App\Services;

use App\Models\Events;
use Carbon\Carbon;
use Illuminate\Http\Client\Request;

class EventsService
{
    /**
     * Recebe os dados que vem do formulário para tratar e atribuir a data e retornar os dados para salvar
     * @param Request $request
     * @return array
     */
    public static function prepareDataToSave(object $request): array
    {
        $dateEvent = new Carbon($request->input('date'));
        return [
            'name' => $request->input('name'),
            'date' => $dateEvent,
            'hour' => $dateEvent->format('H:i'),
            'category_id' => $request->input('category'),
            'user_id' => auth()->user()->id,
        ];
    }

    /**
     * Retorna os próximos eventos
     * @return Events
     */
    public static function nextEvents(): object
    {
        $events = auth()->user()->events()->where('date', '>=', Carbon::now())->get();
        return $events;
    }
}
