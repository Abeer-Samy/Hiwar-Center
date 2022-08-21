<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TraineesSubscription extends Model
{
    use HasFactory;
    protected $table ='trainees_subscriptions';
    protected $fillable = ['subscriber_id','subscription_type','course_id','diploma_id'];

    public function subscribers(){
        return $this->hasMany(Subscriber::class);
    }
}
