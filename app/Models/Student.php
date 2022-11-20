<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'user', 'proceedings', 'enrollment_lapse', 'career','c_entry'
        ,'u_approved_credit','enrolled_credit_units', 'u_c_p_index',
        'academic_index', 'performance_index', 'conduct', 'semester',
        'pensum', 'grade_date', 'lapse_index', 'specialty_mention',
        'c_institute', 'edo_nace_e','u_cred_course_lapse', 'last_load',
        'promotion_number'
    ];
}
