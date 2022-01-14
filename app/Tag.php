<?php

namespace App;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Tag extends Model
{

    protected $table = "tags";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'status', 'slug'];

    /**
     * @return array
     */
    public function posts()
    {
        return $this->belongsToMany('App\Post', 'posts-tags','id','tag_id','post_id','id');
    }
}
