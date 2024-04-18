<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = ['date_reservation', 'status', 'price', 'description', 'title'];

    public function services()
    {
        return $this->belongsToMany(Service::class,);
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    public function employeur()
    {
        return $this->belongsTo(Employeur::class,'employeur_id', 'user_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
