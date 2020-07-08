<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    //
    protected $connection='mysql';
    protected $table='application';

    protected  $fillable=['email','phone','location','package_id','password','status'];

    protected $primaryKey='id';
}
