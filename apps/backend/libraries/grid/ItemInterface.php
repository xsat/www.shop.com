<?php namespace Backend\Libraries\Grid;

interface ItemInterface
{
    public function setModel($model);

    public function renderValue();

    public function renderTitle();
}