<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\Model ;
//use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\SoftDeletes;
class biodata extends Model
{
    use SoftDeletes;
    protected $softDelete = true;
    protected $dates = ['deleted_at'];
}
