<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feelings extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
