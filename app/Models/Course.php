<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'curriculum_year',
        'code',
        'thai_name',
        'eng_name',
        'thai_description',
        'eng_description',
        'credit',
        'lecture_hours',
        'practice_hours',
        'self_study_hours',
        'condition'
    ];
}
