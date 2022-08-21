<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table ='countries';
    protected $fillable = ['countryName' ];

    public function center(){
        return $this->hasMany(Center::class);
    }

    public function characters(){
        return $this->hasMany(Character::class);
    }
    public function subscribers(){
        return $this->hasMany(Subscriber::class);
    }

}
