<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'date_reservation',
        'status',
        'price',
        'employeur_id',
        'service_id',
        'start_date',
        'end_date',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    public function employeur()
    {
        return $this->belongsTo(Employeur::class, 'employeur_id', 'user_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
