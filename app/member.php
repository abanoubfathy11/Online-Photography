<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    //
    protected $connection='mysql';
    protected $table='member';

    protected  $fillable=['name','phone','address','email','password'];

    protected $primaryKey='email';
}
