<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file_tags extends Model
{
    use HasFactory;
    public $table = 'file_tags';

    protected $fillable = [
        'tag_id',
        'file_id'
    ];

    public function tag(){
        return $this->belongsTo(tags::class, 'tag_id', 'id');
    }

//    public function files(){
//        return $this->hasMany(File::Class);
//    }

}
