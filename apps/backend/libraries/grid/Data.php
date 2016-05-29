<?php namespace Backend\Libraries\Grid;

class Data extends \Phalcon\Mvc\User\Component
{
    private $items = [];

    public function addItem(Item $item)
    {
        $this->items[] = $item;
    }
}