<?php

namespace App;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class System extends Model
{

    protected $table = "system";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['section', 'content'];
}
