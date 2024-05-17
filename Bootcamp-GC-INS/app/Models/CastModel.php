<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CastModel extends Model
{
    use HasFactory;
    protected $table = 'cast';
    protected $primaryKey = 'id_cast';
    protected $fillable = [
        'nama',
        'umur',
        'bio',
    ];
}
