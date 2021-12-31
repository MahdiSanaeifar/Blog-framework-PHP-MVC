<?php

namespace App;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Subscriber extends Model
{
    use HasSoftDelete;
    protected $table = "subscribers";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'email'
    ];

    protected $deletedAt = 'deleted_at';

    public function user()
    {
        return $this->belongsTo('\App\User', 'user_id', 'id');
    }
}
