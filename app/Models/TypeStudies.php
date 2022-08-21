<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeStudies extends Model
{
    use HasFactory;

    protected $table ='type_studies';
    protected $fillable = [ 
        'study_type'];

        public function studies(){
            return $this->hasMany(Study::class);
        }
}
