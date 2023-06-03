<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum_Subject extends Model
{
    use HasFactory;
    protected $fillable =[
        'academic_curriculumid','subjectsid','pre_requirements','co_requisites'
    ];
}
