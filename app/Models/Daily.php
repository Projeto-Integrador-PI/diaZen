<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{
    use HasFactory;

    protected $fillable = [
        'good',
        'bad',
        'description',
        'date',
        'user_id',
        'feeling_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function feeling()
    {
        return $this->belongsTo(Feeling::class);
    }

    public function dateFormat(Daily $day)
    {
        $dateCarbon = new Carbon($day->created_at);
        return $dateCarbon->format('d/m/Y');
    }
}
