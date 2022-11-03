<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_entry',
        'date_exit',
        'client_id',
        'room_id',
        'cost_per_night'
    ];

    public function reservations()
    {
        return $this->belongsTo(Client::class);
    }
}
