<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $connection='mysql';
    protected $table='forms';
    protected  $fillable=['filename'];
    protected $primaryKey='id';
}
