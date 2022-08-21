<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Diploma extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    protected $table ='diplomas';
    protected $fillable = ['address','specialization_id','brief_desc','admission_requi'];

    protected $dates = ['deleted_at'];

    public function courseanddiploma(){
        return $this->belongsTo(CourseAndDiploma::class);
    }

    public function course(){
        return $this->belongsToMany(CourseMaterial::class);
    }

    public function specialties(){
        return $this->hasMany(Specialty::class);
    }
}
