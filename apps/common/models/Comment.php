<?php namespace Common\Models;

class Comment extends Model
{
    public $text;
    public $date_create;
    public $date_update;

    public function initialize()
    {
    }
}