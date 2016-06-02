<?php namespace Backend\Libraries\Grid;

class Grid extends \Phalcon\Mvc\User\Component
{
    private $data;
    private $items = [];

    public function __construct($data, $items = [])
    {
        $this->data = $data;
        $this->items = $items;
    }

    public function renderHeader()
    {
        $html = '<tr class="active">';

        foreach ($this->items as $item) {
            $html .= '<th>';
            $html .= $item->getTitle();
            $html .= '</th>';
        }

        $html .= '</tr>';

        return $html;
    }

    public function renderBody()
    {
        $html = '';

        foreach ($this->data as $model) {
            $html .= '<tr>';

            foreach ($this->items as $item) {
                $item->setModel($model);

                $html .= '<td>';
                $html .= $item->getValue();
                $html .= '</td>';
            }

            $html .= '</tr>';
        }


        return $html;
    }
}
