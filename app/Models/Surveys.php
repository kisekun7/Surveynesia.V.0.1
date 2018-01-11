<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surveys extends Model
{
    protected $fillable = ['id_survey','survey_title','category','description'];
}
