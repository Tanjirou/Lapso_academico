<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSection extends Model
{
    use HasFactory;
    protected $fillable =[
        'sectionid','studentid','studentcurriculum','qualification','status',
    ];
}
