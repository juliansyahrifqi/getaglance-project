<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentSection extends Model
{
    use HasFactory;

    protected $table = 'talent_section';
    protected $fillable = [
        'title', 'subtitle', 'description', 'image'
    ];
}
