<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassFile extends Model
{
    use HasFactory;
    protected $table ='courses_materials';
    protected $fillable = ['course_id', 'date_subscription', 'pdf', 'file_status_id'];

    // public function coursematerial(){
    //     return $this->belongsTo(CourseMaterial::class);
    // }
    public function traversefile(){
        return $this->belongsTo(TraverseFileStatus::class);
    }
}
