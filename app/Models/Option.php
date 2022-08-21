<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $table ='options';

    protected $fillable = ['option_txt','poll_id'];

    public function answer(){
        return $this->belongsTo(Answer::class);
    }

    public function opinionpoll(){
        return $this->belongsTo(OpinionPoll::class);
    }
}
