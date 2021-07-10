<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use \Conner\Tagging\Taggable;
class blog_post extends Model
{
    use \Conner\Tagging\Taggable;
    use Sluggable;
    protected $table = 'blog_posts';
    protected $fillable = ['name', 'slug', 'body','f_image','category','status','user_id','user_name'];


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
