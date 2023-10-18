<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContestRegister extends Model
{
    use HasFactory;
    protected $fillable = [
        'idUser',
        'idLomba',
        'photo',
        'status',
        'file1',
        'ktm'
    ];
}
