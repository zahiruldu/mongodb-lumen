<?php

namespace App;

use App\Example;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Example extends Eloquent 
{
    protected $connection = 'mongodb';
    protected $collection = 'examples';
    protected $primaryKey = '_id';
}