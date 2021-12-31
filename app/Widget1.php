<?php

namespace App;

use System\Database\ORM\Model;

class Widget1 extends Model
{
    protected $table = "widget1";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_id',
        'status',
    ];

    /**
     * Return the category's name
     */
    public function post()
    {
        return $this->belongsTo('\App\Post', 'post_id', 'id');
    }

    /**
     * Return the post's author
     */
    public function user()
    {
        return $this->belongsTo('\App\User', 'user_id', 'id');
    }

    /**
     * Return the category's name
     */
    public function category()
    {
        return $this->belongsTo('\App\Category', 'cat_id', 'id');
    }
}
