<?php namespace Common\Models;

class Item extends Model
{
    const TYPE_TEAM = 1;
    const TYPE_PLAYER = 1;
    const TYPE_GAME = 1;

    public $subject;
    public $description;
    public $type;

    public function initialize()
    {
    }
}