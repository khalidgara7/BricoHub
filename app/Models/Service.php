<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['user_id','title', 'description', 'price', 'image', 'category_id','years_of_experience','status'];

    public function offers()
    {
        return $this->belongsToMany(Offer::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'user_id');
    }
}
