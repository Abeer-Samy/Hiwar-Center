<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CenterSection extends Model
{
    use HasFactory;
    protected $table ='center_sections';


    protected $fillable = [ 
        'section_name','brief_summery','center_id','meaningful_pic'
    ];

    public function center(){
        return $this->belongsTo(Center::class);
    }
    public function versions(){
        return $this->hasMany(Vertion::class);
    }
    public function studies(){
        return $this->hasMany(Study::class);
    }
    public function events(){
        return $this->hasMany(Event::class);
    }

}
