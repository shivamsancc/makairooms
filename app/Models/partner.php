<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class partner extends Model
{
    protected $table = 'mak_partners';
    protected $fillable = ['name', 'email','user_id','phone','address','state','district','pincode','status'];
}
