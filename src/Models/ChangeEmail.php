<?php

namespace budisteikul\coresdk\Models;

use Illuminate\Database\Eloquent\Model;

class ChangeEmail extends Model
{
    protected $table = 'change_emails';
	protected $keyType = 'string';
	protected $dateFormat = 'Y-m-d H:i:s.u';
	protected $fillable = ['user_id','email','token'];
	
	public function User()
    {
        return $this->belongsTo('budisteikul\coresdk\Models\User','user_id');
    }
}
