<?php

namespace budisteikul\coresdk\Models;

use Illuminate\Database\Eloquent\Model;

class File_tmp extends Model
{
    protected $table = 'file_tmp';
	protected $keyType = 'string';
	protected $dateFormat = 'Y-m-d H:i:s.u';
}
