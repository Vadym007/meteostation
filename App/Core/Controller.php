<?php

namespace App\Core;

class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View;
    }

    protected function renderView($view, array $params = [])
    {
        $this->view->render($view, $params);
    }
}