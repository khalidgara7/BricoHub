<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    use HasFactory;

    public function domaine()
    {
        return $this->belongsTo(Domaine::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
}
