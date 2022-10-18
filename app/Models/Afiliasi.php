<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afiliasi extends Model
{
    use HasFactory;

    protected $table = 'afiliasi';
    protected $fillable = [
        'title', 'description'
    ];
}
