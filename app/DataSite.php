<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSite extends Model
{
    protected $table = 'dataSite';

    protected $fillable = ['ocupation'];

    public $timestamps = false;
}
