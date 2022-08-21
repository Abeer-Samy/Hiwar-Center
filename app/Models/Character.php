<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Character extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table ='characters';

    protected $fillable = ['fullName','phone','email','fax','facebook', 'twitter', 'instgrame',
    'youtube','profile_pic','speciality','profile','personality_type_id','country_id',
    'center_id' ];
    protected $dates = ['deleted_at'];

    public function center(){
        return $this->belongsTo(Center::class);
    }

    public function personalitytype(){
        return $this->belongsTo(PersonalityType::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function vertions(){
        return $this->hasMany(Vertion::class);
    }


}
