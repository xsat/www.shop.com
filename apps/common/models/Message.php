<?php namespace Common\Models;

class Message extends Model
{
    public $user_id;
    public $text;
    public $date_create;
    public $date_update;

    public function initialize()
    {
    }
}