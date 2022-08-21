<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPremission extends Model
{
    use HasFactory;
    protected $table ='user_premissions';
    protected $fillable = ['validity-type'];


    public function user(){
        return $this->belongsTo(Users::class);
    }
}
