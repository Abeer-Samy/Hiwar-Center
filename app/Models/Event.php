<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table ='events';

    protected $fillable = ['title','date_from','date_to','image','vedio','topic','suggested_title','pdf','section_id'
         ,'specialization_id','event_type_id',
'result_and_recom','event_statuses_id'
];
public function typeactivity(){
    return $this->belongsTo(TypeActivity::class);
}
public function specialty(){
    return $this->belongsTo(Specialty::class);
}
public function eventstatus(){
    return $this->belongsTo(EventStatuse::class);
}
public function eventpaper(){
    return $this->belongsTo(EventPaper::class);
}
public function centersection(){
    return $this->belongsTo(CenterSection::class);
}

}
