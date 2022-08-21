<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseMaterial extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table ='courses_materials';
    protected $fillable = ['course_type_id', 'address', 'participant_id', 'img', 'vedio', 'pass_file'
    ,'pdf','admission_req','description'];
    
    protected $dates=['deleted_at'];

    public function coursetype(){
        return $this->belongsTo(CourseType::class);
    }

    // public function passfile(){
    //     return $this->hasOne(PassFile::class);
    // }
    public function subscriber(){
        return $this->belongsTo(Subscriber::class);
    }
    public function coursediploma(){
        return $this->belongsTo(CourseAndDiploma::class);
    }

    public function diploma(){
        return $this->belongsToMany(Diploma::class);
    }

}
