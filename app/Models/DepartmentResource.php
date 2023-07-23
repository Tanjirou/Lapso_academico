<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentResource extends Model
{
    use HasFactory;
    protected $fillable= [
        'departmentid','description','quantity'
    ];

}
