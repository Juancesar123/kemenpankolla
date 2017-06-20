<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
class managementfilemodel extends Model
{
    use SoftDeletes;
}
