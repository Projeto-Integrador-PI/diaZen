<?php

namespace App\Models;

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
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function feeling()
    {
        return $this->hasMany(Feeling::class);
    }
}
