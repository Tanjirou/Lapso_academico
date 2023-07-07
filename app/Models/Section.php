<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable =[
        'teacherid','structure_sectionid' ,'academic_lapseid','subjectid',
        'section_number','status',
    ];
}
