<?php

namespace App;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Menu extends Model
{

    use HasSoftDelete;
    protected $table = "menus";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'parent_id','status','url'];
    protected $deletedAt = 'deleted_at';

    /**
     * Get menu parent data
     * @return array
     */
    public function parent()
    {
        return $this->belongsTo('\App\Menu', 'parent_id', 'id');
    }
}
