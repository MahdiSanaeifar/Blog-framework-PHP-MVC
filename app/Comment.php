<?php

namespace App;

use System\Database\ORM\Model;

class Comment extends Model
{
    protected $table = "comments";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'parent_id',
        'comment',
        'status',
        'approved',
        'post_id',
    ];

    public function user()
    {
        return $this->belongsTo('\App\User', 'user_id', 'id');
    }

    public function child()
    {
        return $this->hasMany('\App\Comment', 'parent_id', 'id');
    }

    /**
     * Get text of answerd parent id.
     */
    public function commentParent()
    {
        return !empty($this->parent_id) ? $this->belongsTo('\App\Comment', 'parent_id', 'id')->comment : "";
    }
}
