<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpinionPoll extends Model
{
    use HasFactory;
    protected $table ='opinion_polls';

    protected $fillable = ['question','start_date','poll_end_date'];

    public function answer(){
        return $this->hasOne(Answer::class);
    }

    public function options(){
        return $this->hasMany(Option::class);
    }
}
