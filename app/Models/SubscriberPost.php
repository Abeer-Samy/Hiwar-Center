<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriberPost extends Model
{
    use HasFactory;
    protected $table ='subscribes_posts';
    protected $fillable = ['subject','title','subscriber_id','participation_status_id','participation_stage_id'
];

public function arbitratorresearche(){
    return $this->belongsTo(ArbitratorResearche::class);
}

public function participationcase(){
    return $this->belongsTo(ParticipationCase::class);
}

public function researchrparticipationstage(){
    return $this->belongsTo(ResearchrParticipationStage::class);
}
}
