<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeActivity extends Model
{
    use HasFactory;
    protected $table ='type_activities';
    protected $fillable = ['event_type'];

    public function events(){
        return $this->hasMany(Event::class);
    }
    public function eventpaper(){
        return $this->hasOne(EventPaper::class);
    }
}
