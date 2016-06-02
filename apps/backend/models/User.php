<?php namespace Backend\Models;

class User extends \Common\Models\User
{
    public function getStatus()
    {
        if ($this->status == self::STATUS_ACTIVE) {
            return 'Active';
        } elseif ($this->status == self::STATUS_INACTIVE) {
            return 'Inactive';
        } elseif ($this->status == self::STATUS_BANED) {
            return 'Banned';
        }

        return $this->status;
    }
}
