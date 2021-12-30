<?php

namespace App;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Gallery extends Model
{
    use HasSoftDelete;
    protected $table = "galleries";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['image', 'post_id'];
    protected $deletedAt = 'deleted_at';
}
