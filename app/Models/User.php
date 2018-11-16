<?php
namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    use Notifiable;

	protected $fillable = [ 'phone', 'email', 'account', 'password', 'salt', 'fullName', 'nickname', 'gender', 'birthday', 'active', 'user_group'];

	protected $hidden = ['password', 'salt', 'remember_token'];
    
}
