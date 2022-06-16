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
        'survey_id',
        'question_id',
        'option'
    ];

    public function user() {
        return $this->belongsTo(UserStats::class);
    }

    public function question() {
        return $this->belongsTo(Question::class);
    }

    public function survey() {
        return $this->belongsTo(Survey::class);
    }
}
