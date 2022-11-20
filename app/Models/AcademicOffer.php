<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicOffer extends Model
{
    use HasFactory;
    protected $fillable =['course','lapse', 'sections','inscribed'
        ,'teacher_dni', 'record', 'top_cup'];
}
