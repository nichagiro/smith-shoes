<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portafolio extends Model
{
    use HasFactory;

    protected $fillable = [
        ' name_zapatilla ', 
        ' photo '
        ];
        
}
