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

    /**
     * @return array
     */
    public function galleries()
    {
        return $this->hasMany('\App\Gallery', 'post_id', 'id');
    }

    /**
     * @return array
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'posts-tags','id','post_id','tag_id','id');
    }
}


//SELECT `c`.* FROM ( SELECT `b`.* FROM `{$table}` AS `a` JOIN `{$commonTable}` AS `b` on `a`.`{$localKey}` = `b`.`{$middleForeignKey}` WHERE  `a`.`{$localKey}` = ? ) AS `relation` JOIN ".$this->getTableName()." AS `c` ON `relation`.`{$middleRelation}` = `c`.`$foreignKey`
//SELECT posts.* FROM ( SELECT category_post.* FROM categories JOIN category_post on categories.id = category_post.cat_id WHERE  categories.id = ? ) as relation JOIN posts on relation.post_id=posts.id
//SELECT `c`.* FROM ( SELECT `b`.* FROM `posts` AS `a` JOIN `posts-tags` AS `b` on `a`.`id` = `b`.`post_id` WHERE `a`.`id` = ? ) AS `relation` JOIN `tags` AS `c` ON `relation`.`id` = `c`.`tag_id

//SELECT `c`.* FROM ( SELECT `b`.* FROM `posts` AS `a` JOIN `posts-tags` AS `b` on `a`.`id` = `b`.`post_id` WHERE `a`.`id` = 1 ) AS `relation` JOIN `tags` AS `c` ON `relation`.`tag_id` = `c`.`id`