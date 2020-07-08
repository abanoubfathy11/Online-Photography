<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class infoPage extends Model
{
    //
    protected $connection='mysql';
    protected $table='infopage';

    protected  $fillable=['banner1','price1','price2','banner2'];

    protected $primaryKey='id';
}
