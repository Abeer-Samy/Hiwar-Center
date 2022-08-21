<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;
    protected $table ='subscribers';
    protected $fillable = ['subscriber_name','country_id','speciality','email','phone','pass'
    ,'confirm_pass','account_type','cv','pdf_cv'];


    public function trainieesubscription(){
        return $this->belongsTo(TraineesSubscription::class);
    }
    public function accounttype(){
        return $this->belongsTo(AccountType::class);
    }

    public function arbitratorresearche(){
        return $this->belongsTo(ArbitratorResearche::class);
    }
    public function coursematerial(){
        return $this->hasMany(CourseMaterial::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }


}
