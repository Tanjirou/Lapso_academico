<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryTable extends Model
{
    use HasFactory;
    protected $fillable =[
        'sectionid','studentid','studentcurriculum','teacher_dni','qualification','status',
    ];
}
