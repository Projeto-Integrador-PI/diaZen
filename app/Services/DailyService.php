<?php

namespace App\Services;

use App\Models\Daily;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DailyService
{
    /**
     * Cria a nova entrada relacionado ao sentimento do dia
     * @param Request $request
     * @return void
     */
    public static function newDay(Request $request): void
    {
        Daily::create([
            'good' => !empty( $request->input('good')) ?  $request->input('good') : '',
            'bad' =>  !empty($request->input('bad')) ? $request->input('bad') : '',
            'description' =>  !empty($request->input('description')) ? $request->input('description') : '',
            'date' => Carbon::now(),
            'user_id' => auth()->user()->id,
            'feeling_id' => $request->input('feeling'),
        ]);
    }

    /**
     * Retorna os ultimos 5 registros
     * @return Daily[]|\Illuminate\Database\Eloquent\Collection
    */
    public static function getDailyFiveReg(): object
    {
        return Daily::orderByDesc('id')->limit(5)->get();
    }
}
