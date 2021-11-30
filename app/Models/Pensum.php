<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pensum extends Model
{
    use HasFactory;
    protected $fillable = [
        'course', 'career', 'semester', 'credit_units', 'subject_precondition1'
        ,'subject_precondition2','subject_precondition3', 'subject_precondition4',
        'subject_precondition5','cred_units_required','corequisite_code1',
        'corequisite_code2','corequisite_code3', 'obligatory', 'elective', 'chain_rep',
        'lapse', 'pensum','mention',
    ];
}
