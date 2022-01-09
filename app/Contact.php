<?php

namespace App;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Contact extends Model
{
    use HasSoftDelete;
    protected $table = "contacts";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message'
    ];

    protected $deletedAt = 'deleted_at';
}
