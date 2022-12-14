<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $casts = [
        'question' => 'array'
    ];

    public function survey() {
        return $this->belongsTo(Survey::class, 'survey_id');
    }
}
