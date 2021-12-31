<?php

namespace App;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class User extends Model
{

    use HasSoftDelete;

    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'username',
        'avatar',
        'status',
        'is_active',
        'password',
        'verify_token',
        'user_type',
        'remember_token',
        'remember_token_expire'
    ];

    protected $deletedAt = 'deleted_at';

}
