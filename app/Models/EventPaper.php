<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPaper extends Model
{
    use HasFactory;

    protected $table ='event_papers';

    protected $fillable = ['title',
    'author','subject','date','photo',
    'vedio','location','result_and_recom',
    'event_id'];

    public function typeactivity(){
        return $this->belongsTo(TypeActivity::class);
    }
    public function events(){
        return $this->hasMany(Event::class);

    }
}
