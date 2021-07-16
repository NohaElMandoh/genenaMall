<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Qa extends Model
{
    use HasFactory;
    protected $appends = ['question','answer','text_link'];

    public function getQuestionAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->question_en;
        } else if (App::isLocale('ar')) {
            return $this->question_ar;
        }
    }
    public function getAnswerAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->answer_en;
        } else if (App::isLocale('ar')) {
            return $this->answer_ar;
        }
    }
    public function getTextLinkAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->text_link_en;
        } else if (App::isLocale('ar')) {
            return $this->text_link_ar;
        }
    }
}
