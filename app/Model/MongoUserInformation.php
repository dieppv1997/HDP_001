<?php

namespace App\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class MongoUserInformation extends Eloquent
{
    protected $connection = 'mongodb';
    protected $table = 'list_user';

    protected $fillable  = [
        "user_id", "name", "email", "division", "team" , "position", "skills", "children", "certificate", "contracts", "phone", "avatar", "tax_code", "status", "group", "description", "level",
        "special_timesheet_id", 'communities'
    ];
}
