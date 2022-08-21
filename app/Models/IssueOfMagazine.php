<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueOfMagazine extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table ='issue_of_magazines';
    protected $fillable = ['issue_title',
    'issue_serial_no',
    'issue_img',
    'issue_date',
    'pdf',
    'particants',
    'edited'];
    
    protected $dates = ['deleted_at'];


    public function issuecontents(){
        return $this->hasMany(IssueContent::class);
    }

    public function magazines(){
        return $this->belongsTo(magazine::class);
    }
}
