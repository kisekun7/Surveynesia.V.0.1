<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
	public $table = "answers";
    public $fillable = ['id_question','answer'];

	
    
}
