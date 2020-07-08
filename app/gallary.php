<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallary extends Model
{
    //
    protected $connection='mysql';
    protected $table='photo';

    protected  $fillable=['title','description','path','member_id','package_id'];

    protected $primaryKey='id';
}
