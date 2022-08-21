<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;
    protected $table ='specialties';
    protected $fillable = [ 'name' , 'brief_summery'];

    public function versions(){
        return $this->hasMany(Vertion::class);
    }
    
    public function studies(){
        return $this->hasMany(Study::class);
    }

    public function events(){
        return $this->hasMany(Event::class);
    }

    public function diploma(){
        return $this->belongsTo(Diploma::class);
    }
}
