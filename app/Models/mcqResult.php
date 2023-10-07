<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mcqResult extends Model
{
    use HasFactory;
    protected $table = 'mcq_results';
    protected $fillable = [

        'candidate_name',
        'marks_obtained',
        'total_marks',
        'percentage_earned',
        'correct_answers',
        'wrong_answers',
        'certificate_category'
    ];
}
