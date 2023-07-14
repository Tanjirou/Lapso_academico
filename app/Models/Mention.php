<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mention extends Model
{
    use HasFactory;
    protected $fillable =[
        'subjectid' ,'academic_curriculaid', 'pre_req','post_req','status',
    ];

}
