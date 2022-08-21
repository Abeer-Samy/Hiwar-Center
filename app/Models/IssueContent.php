<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueContent extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table ='issue_contents';
    protected $fillable = ['title','author','subject','issue_id','image','pfd'];
    
    protected $dates = ['deleted_at'];

    public function issueofmagazine(){
        return $this->belongsTo(IssueOfMagazine::class);
    }
   
}
