<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'date',
        'hour',
        'user_id',
        'category_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function feeling()
    {
        return $this->hasMany(Feeling::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function dateFormat(Events $event)
    {
        $dateCarbon = new Carbon($event->date);
        return $dateCarbon->format('d/m/Y');
    }
}
