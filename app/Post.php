<?php

namespace App;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Post extends Model
{
    use HasSoftDelete;
    protected $table = "posts";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'cat_id',
        'image',
        'published_at',
        'status',
        'user_id',
        'summary',
        'views',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $casts = [
        'image' => 'array',
    ];
    protected $deletedAt = 'deleted_at';

    /**
     * Return the category's name
     */
    public function category()
    {
        return $this->belongsTo('\App\Category', 'cat_id', 'id');
    }

    /**
     * Return the post's author
     */
    public function user()
    {
        return $this->belongsTo('\App\User', 'user_id', 'id');
    }

    public function galleries()
    {
        return $this->hasMany('\App\Gallery', 'post_id', 'id');
    }
}
