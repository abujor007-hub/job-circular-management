<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jobDataCollection extends Model
{
    protected $fillable = [
        'date','countryName', 'work', 'age','companyName','salary','facility','raf'

    ];
}
