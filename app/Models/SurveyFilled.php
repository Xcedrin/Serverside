<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyFilled extends Model
{
    use HasFactory;

    protected $table = 'survey_filled';

    protected $fillable = [
        'user_id',
        'question_id',
        'option'
    ];
}
