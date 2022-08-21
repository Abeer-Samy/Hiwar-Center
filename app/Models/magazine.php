<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class magazine extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table ='magazines';
    protected $fillable = [
        'magazine_title', 
        'img', 
        'brief_discption',
        'standard_id',
        'release'
    ];

    protected $dates = ['deleted_at'];


    public function issues(){
        return $this->hasMany(IssueOfMagazine::class);
    }
}
