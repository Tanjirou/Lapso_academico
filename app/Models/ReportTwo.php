<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportTwo extends Model
{
    use HasFactory;
    protected $fillable =[
        'dni','subject_code','subject','sections','student_cant','number_student'
    ];
}
