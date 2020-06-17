<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'restaurants';
    protected $primaryKey = 'id';


    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
