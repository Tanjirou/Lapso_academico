<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    use HasFactory;
    protected $fillable = [

       'userid', 'ndepartament', 'nmention', 'college_degree', 'status'

        ];
}
