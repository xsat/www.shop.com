<?php namespace Common\Models;

class Transaction extends Model
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 2;

    public $user_id;
    public $date_create;
    public $status = self::STATUS_ACTIVE;

    public function initialize()
    {
    }
}