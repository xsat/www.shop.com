<?php namespace Common\Models;

class User extends Model
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 2;
    const STATUS_BANED = 3;

    public $id;
    public $first_name;
    public $second_name;
    public $email;
    public $password;
    public $date_create;
    public $date_update;
    public $status = self::STATUS_INACTIVE;
}