<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorOrTranslator extends Model
{
    use HasFactory;
    protected $table ='author_or_translators';
    protected $fillable = [ 'author_name'
];

public function studies(){
    return $this->hasMany(Study::class);
}


}
