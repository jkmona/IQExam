<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLog extends Model {
    protected $table='iq_user_log';
    protected $primaryKey = 'user_log_id';
}
