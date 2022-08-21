<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfVertion extends Model
{
    use HasFactory;

    protected $table ='type_of_versions';
    protected $fillable = ['version_type'];


    public function versions(){
        return $this->hasMany(Vertion::class);
    }
    
}
