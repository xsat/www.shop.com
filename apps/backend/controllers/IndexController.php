<?php namespace Backend\Controllers;

class IndexController extends ControllerBase
{
    public function indexAction()
    {
        //$model = new \Backend\Models\Model();

        $grid = new \Backend\Libraries\Grid\Grid();
        $this->view->setVar('grid', $grid);
    }
}
