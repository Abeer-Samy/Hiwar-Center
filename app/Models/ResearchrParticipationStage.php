<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchrParticipationStage extends Model
{
    use HasFactory;
    protected $table ='research_participation_stages';

    protected $fillable = ['stage_name'];

    public function subscriberpost(){
        return $this->hasMany(SubscriberPost::class);
    }
}
