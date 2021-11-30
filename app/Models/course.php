<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'name', 'credit_units', 'theoretical_hours', 'practical_hours',
        'laboratory_hours','section_code' ];
}
