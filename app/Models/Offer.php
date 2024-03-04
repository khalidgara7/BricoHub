<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = ['date_reservation', 'status', 'price', 'description', 'title'];

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

}
