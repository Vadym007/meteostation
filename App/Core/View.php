<?php

namespace App\Core;

class View {

    private $viewsDir = __DIR__ . '/../Views/';
  
    public function render($template, $params = array()){
        echo $this->fetchPartial($template, $params);
    }

    protected function fetchPartial($template, $params = array()){
        extract($params);
        ob_start();
        include $this->viewsDir . $template.'.php';
        return ob_get_clean();
    }
 

}