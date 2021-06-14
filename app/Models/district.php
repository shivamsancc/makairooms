<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    protected $table = 'apps_districts';
    protected $fillable = ['state_code', 'district_code', 'district_name','status'];
}
