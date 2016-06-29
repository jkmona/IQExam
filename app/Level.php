<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model {

    protected $table='iq_level';
    //protected $fillable=['name','difficult','parent_id', 'is_locked', 'picture'];
    protected $primaryKey = 'level_id';
}
