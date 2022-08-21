<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class lectuers extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table ='lectuers';
    protected $fillable = ['course_id', 'participant_id', 'date', 'img', 'vedio','pdf','txt'];

    protected $dates=['deleted_at'];

    public function courseMaterial(){
        return $this->belongsTo(CourseMaterial::class);
    }

}
