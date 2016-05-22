<?php namespace Backend\Models;

class Admin extends Model
{
    public $name;
    public $login;
    public $password;
    public $role_id;
    public $date_login;

    public function initialize()
    {
    }
}
