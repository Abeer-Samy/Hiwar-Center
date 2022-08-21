<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalityType extends Model
{
    use HasFactory;

    protected $table ='personality_types';

    protected $fillable = ['personality_type'];
    

    public function characters(){
        return $this->hasMany(Character::class);
    }
}
