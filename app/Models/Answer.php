<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $table ='opinion_polls';

    protected $fillable = ['poll_id','option_id'];

    public function opinionpoll(){
        return $this->belongsTo(OpinionPoll::class);
    }
        public function options(){
            return $this->hasMany(Option::class);
        
    }
    }

