<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taggable extends Model
{
    protected $fillable=[
        'taggable_type', 'taggable_id', 'tag_id'
    ];

    protected $hidden=[
        'created_at', 'updated_at'
    ];

    public function taggable(){
        return $this->morphTo();
    }
}
