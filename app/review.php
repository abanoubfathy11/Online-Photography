<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    //
    protected $connection='mysql';
    protected $table='feedback';

    protected  $fillable=['email','content'];

    protected $primaryKey='id';
}
