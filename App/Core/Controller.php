<?php

namespace App\Core;

class Controller {

    protected $data = [];

    public function __construct() {

    }

    protected function getData() {
        return $this->data;
    }

    public function __call($name, $arguments) {
        $this->loadTemplate('error_404');
    }

    public function loadView($viewName, $viewData = array()) {
        // a EXTRACT Transforma as chaves de um array em variáveis e seus valores em valores da variável 
        extract($viewData);
        include '../App/Views/' . $viewName . '.php';
    }

    public function loadTemplate($viewName, $viewData = array()) {

        include '../App/Views/template.php';
    }

    public function loadViewInTemplate($viewName, $viewData) {
        extract($viewData);
        include '../App/Views/' . $viewName . '.php';
    }

}
