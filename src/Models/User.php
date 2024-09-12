<?php

namespace budisteikul\coresdk\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
	use Notifiable, HasApiTokens;
	
    protected $table = 'users';
    protected $keyType = 'string';
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	
	public function ChangeEmail()
	{
		return $this->hasOne(ChangeEmail::class,'user_id');	
	}
}
