<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporalOpeningSection extends Model
{
    use HasFactory;
    protected $fillable =[
        'subject', 'section_numbers'
    ];
}
