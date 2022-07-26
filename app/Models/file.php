<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'extension' ,
        'file_link',
        'folder_id',
//        'tags'
    ];

    public function FolderFile(){
        return $this->belongsTo(Folder::class, 'folder_id', 'id');
    }

    public function FileTags(){
        return $this->hasMany(file_tags::Class,'file_id','id');
    }
}
