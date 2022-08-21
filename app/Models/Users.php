<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table ='user';
    protected $fillable = ['user_name','user_validation_id'];

public function userpremissions(){
    return $this->hasMany(UserPremission::class);
}
}
