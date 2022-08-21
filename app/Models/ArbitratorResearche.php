<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArbitratorResearche extends Model
{
    use HasFactory;
    protected $table ='arbitrators_researches';
    protected $fillable = ['participant_participation_id',
    'subscriber_id'];

    public function subscribers(){
        return $this->hasMany(Subscriber::class);
    }

    public function subscriberposts(){
        return $this->hasMany(SubscriberPost::class);
    }
}
