<?php namespace Common\Models;

class Comment extends Model
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 2;

    public $id;
    public $user_id;
    public $post_id;
    public $content;
    public $date_create;
    public $status = self::STATUS_INACTIVE;
}