<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    use HasFactory;
    protected $fillable = [
        'user', 'undergraduate_title', 'undergraduate_area', 'undergraduate_inst',
        'undergraduate_country','type_postgraduate', 'type_area', 'postgraduate_country',
        'postgraduate_completed', 'postgraduate_studies', 'postgraduate_thesis_missing',
        'date_entry_public_adm','date_entry_unexpo', 'sabbatical_date', 'retirement_date',
        'dedication', 'category', 'condition', 'section_code','assign_condition','assign_dict',
        ];
}
