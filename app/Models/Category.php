<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'description', 'image'];
}
