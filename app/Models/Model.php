<?php
/**
 * Created by PhpStorm.
 * User: liuliang
 * Date: 2018/3/15
 * Time: 下午8:43
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

}