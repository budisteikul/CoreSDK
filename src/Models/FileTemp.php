<?php

namespace budisteikul\coresdk\Models;

use Illuminate\Database\Eloquent\Model;

class FileTemp extends Model
{
    protected $table = 'file_temps';
	protected $keyType = 'string';
	protected $dateFormat = 'Y-m-d H:i:s.u';
	protected $fillable = ['user_id','file','key'];
}
