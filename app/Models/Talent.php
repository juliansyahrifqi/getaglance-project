<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    use HasFactory;

    protected $table = 'talent';
    protected $fillable = [
        'image', 'name', 'instagram', 'pekerjaan'
    ];
}
