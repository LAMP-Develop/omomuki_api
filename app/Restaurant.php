<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Rennokki\QueryCache\Traits\QueryCacheable;

class Restaurant extends Model
{
    use QueryCacheable;
    public $cacheFor = 3600; // cache time, in seconds

    protected $table = 'restaurants';
    protected $primaryKey = 'id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
