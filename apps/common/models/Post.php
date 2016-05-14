<?php namespace Common\Models;

class Post extends Model
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 2;

    public $id;
    public $user_id;
    public $title;
    public $content;
    public $date_create;
    public $status = self::STATUS_INACTIVE;
}