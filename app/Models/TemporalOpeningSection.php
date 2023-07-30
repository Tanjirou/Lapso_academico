<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporalOpeningSection extends Model
{
    use HasFactory;
    protected $fillable =[
        'dni','subject','student_dni' ,'student'
    ];
}
