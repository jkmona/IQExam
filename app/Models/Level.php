<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model {

    protected $fillable=['name','difficult','parent_id', 'is_locked', 'picture'];
}
