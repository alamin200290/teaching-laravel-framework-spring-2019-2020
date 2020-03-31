<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //protected $table = "user_table";
    public $timestamps = false;
    //const $CREATED_AT = 'create_time';
    //const $UPDATED_AT = 'updated_time';
    protected $primaryKey = "userId";
}
