<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory;
    protected $table ='centers';
    protected $fillable = [   'center_name', 'brief_discrption', 'image', 'vision', 'mission', 'objectives', 'center_location',
        'phone', 'email', 'fax', 'facebook', 'twitter', 'instgrame', 'youtube', 'country_id',
        'date_establish'
    ];
    public function country(){
        return $this->belongsTo(Country::class);
    }


    public function characters(){
        return $this->hasMany(Character::class);
    }
    
    public function centersections(){
        return $this->hasMany(CenterSection::class);
    }

}
