<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {
	use Authenticatable, CanResetPassword;

	protected $table = 'iq_user';

 	protected $primaryKey = 'user_id';

	protected $fillable = [ 'phone', 'email', 'account', 'password', 'salt', 'fullName', 'nickname', 'gender', 'birthday', 'active', 'user_group'];

	protected $hidden = ['password', 'salt', 'remember_token'];

    //public $timestamps = false;

}
