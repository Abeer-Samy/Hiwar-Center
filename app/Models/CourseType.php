<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{
    use HasFactory;

    protected $table ='course_types';
    protected $fillable = ['course_type'];

    public function coursematerials(){
        return $this->hasMany(CourseMaterial::class);
    }
}
