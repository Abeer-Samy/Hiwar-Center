<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    use HasFactory;

    protected $table ='studies';
    
    protected $fillable = [ 
        'origititle', 
        'title', 
        'content_brief',
        'imge',
        'publish_house',
        'year_publication',
        'section_id',
        'specialization_id',
        'study_type_id',
        'pdf'];

    public function specialty(){
        return $this->belongsTo(Specialty::class);
    }

    public function typestudy(){
        return $this->belongsTo(TypeStudies::class);
    }
    
    public function authorortranslator(){
        return $this->belongsTo(AuthorOrTranslator::class);
    }
    public function centersection(){
        return $this->belongsTo(CenterSection::class);
    }
}
