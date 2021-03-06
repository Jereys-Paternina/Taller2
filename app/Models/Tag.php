<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable=[
        'nombre'
    ];

    protected $hidden=[
        'id', 'created_at', 'updated_at'
    ];

    public function taggables(){
        return $this->morphMany('App\Models\Taggable', 'taggable', 'taggable_type', 'taggable_id');
    }
}
