<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionAnswerLike extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'answer_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function answer()
    {
        return $this->belongsTo(QuestionAnswer::class);
    }
}
