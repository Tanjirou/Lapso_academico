<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrolledSubject extends Model
{
    use HasFactory;
    protected $fillable= [
        'record', 'lapse', 'course', 'student_record','qualification', 'aff_index',
        'status','section', 'c_status_note', 'date', 'includes'
    ];
}
