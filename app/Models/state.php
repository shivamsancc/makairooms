<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    protected $table = 'apps_states';
    protected $fillable = ['state_code', 'state_name', 'state_icon'];
}
