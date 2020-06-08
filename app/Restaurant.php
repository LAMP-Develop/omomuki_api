<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'restaurants';
    protected $primaryKey = 'id';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
