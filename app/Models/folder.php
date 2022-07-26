<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class folder extends Model
{
    use HasFactory;
    public $table = 'folders';

    protected $fillable = [
        'name',
        'status'
    ];

    public function files(){
        return $this->hasMany(File::Class,'folder_id','id');
    }

}
