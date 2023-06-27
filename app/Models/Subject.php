<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable =[
        'departmentsectionid','code', 'name', 'credit_units', 'pre_req', 'co_req','status'
    ];
}
