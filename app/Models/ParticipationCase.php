<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipationCase extends Model
{
    use HasFactory;

    protected $table ='participation_cases';

    protected $fillable = ['case_name'];



    public function subscriberpost(){
        return $this->hasMany(SubscriberPost::class);
    }

}
