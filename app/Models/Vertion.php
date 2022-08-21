<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vertion extends Model
{
    use HasFactory;

    protected $table ='versions';
    protected $fillable = [
        'title' ,
        'version_type_id',
        'subject',
        'imge',
        'character_id',
        'date',
        'referances',
        'section_id',
        'specialization_id',
        'pdf'

    ];


    public function specialty(){
        return $this->belongsTo(Specialty::class);
    }

    public function typeofversion(){
        return $this->belongsTo(TypeOfVertion::class);
    }
    public function character(){
        return $this->belongsTo(Character::class);
    }
    public function centersection(){
        return $this->belongsTo(CenterSection::class);
    }
    
}
