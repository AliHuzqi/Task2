<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    use HasFactory;
    public $table = 'tags';

    protected $fillable = [
        'name'
    ];




//    public function t(){
//        return $this->hasMany(File::Class);
//    }

}
