<?php
namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    use Notifiable;

	protected $fillable = [ 'phone', 'email', 'account', 'password', 'salt', 'points', 'real_name', 'nickname', 'avatar_url', 'gender', 'birthday', 'active'];

	protected $hidden = ['password', 'salt', 'remember_token'];

    /**
     * A user can have many articles
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles(){
	    return $this->hasMany('App\Models\Article');
    }
}
