<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventStatuse extends Model
{
    use HasFactory;
    protected $table ='event_statuses';
    protected $fillable = ['eventStatusType'];

 public function events(){
            return $this->hasMany(Event::class);
        
    }
}
