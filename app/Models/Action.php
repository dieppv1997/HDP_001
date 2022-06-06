<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as EloquentModel;

class Action extends EloquentModel
{
    protected $connection = 'mongodb';
    protected $collection = 'actions';
}

