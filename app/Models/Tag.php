<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        "name"
    ];
    /**
     * Get the article associated with the given tag.
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function articles(){
        return $this->hasMany('App\Models\Article');
    }
}
