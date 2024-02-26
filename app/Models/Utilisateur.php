<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }

    public function employeur()
    {
        return $this->hasOne(Employeur::class);
    }

    public function administration()
    {
        return $this->hasOne(Administration::class);
    }
}
