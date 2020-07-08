<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    //
    protected $connection='mysql';
    protected $table='contactpage';

    protected  $fillable=['phone','email','address'];

    protected $primaryKey='id';
}
