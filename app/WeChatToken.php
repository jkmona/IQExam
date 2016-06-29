<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeChatToken extends Model
{
    protected $table='iq_wechat_token';
    protected $primaryKey = 'wechat_token_id';
}
