<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'contenido'
    ];

    protected $hidden=[
        'id', 'created_at', 'updated_at'
    ];

    public function taggables(){
        return $this->morphMany('App\Models\Taggable', 'taggable', 'taggable_type', 'taggable_id');
    }
}
