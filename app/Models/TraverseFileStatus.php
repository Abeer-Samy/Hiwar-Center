<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TraverseFileStatus extends Model
{
    use HasFactory;

    protected $table ='traverse_file_statuses';
    protected $fillable = [
        'case_type'];

        public function passfiles(){
            return $this->hasMany(PassFile::class);
        }
}
