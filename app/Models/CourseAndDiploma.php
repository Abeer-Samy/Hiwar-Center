<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseAndDiploma extends Model
{
    use HasFactory;

    protected $table ='courses_diplomas';
    protected $fillable = ['courseMaterial_id','deploma_id'];

    public function diploma(){
        return $this->hasMany(Diploma::class);
    }
    public function coursematrials(){
        return $this->hasMany(CourseMaterial::class);
    }

}
