<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class mapapi extends Model
{
    protected $table = 'mapapis';  
    protected $fillable =['access_token', 'token_type', 'expires_in','scope', 'project_code', 'client_id'];
}
