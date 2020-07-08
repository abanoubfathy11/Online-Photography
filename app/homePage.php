<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homePage extends Model
{
    //
    protected $connection='mysql';
    protected $table='homepage';

    protected  $fillable=['banner1','banner2','banner3','banner4','banner5','banner6','banner7'];

    protected $primaryKey='id';
}
