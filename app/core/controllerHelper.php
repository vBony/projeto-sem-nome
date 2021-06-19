<?php
class controllerHelper{
    public function loadView($viewName, $viewData = array(), $show_header = true){
        extract($viewData);

        if($_ENV['ENVIROMENT'] == 'development'){
            $headerHomolog = file_get_contents($_ENV['BASE_URL'] . 'app/views/homolog-header.php');

            if($show_header == true){
                echo $headerHomolog;
            }
        }

        require 'app/views/'.$viewName.'.php';
    }

    public function loadTemplate($viewName, $viewData = array(), $show_header = true){
        extract ($viewData);

        if($_ENV['ENVIROMENT'] == 'development'){
            $headerHomolog = file_get_contents($_ENV['BASE_URL'] . 'app/views/homolog-header.php');

            if($show_header == true){
                echo $headerHomolog;
            }
        }

        require 'app/views/template.php';
    }

    public function loadViewInTemplate($viewName, $viewData = array()){
        extract($viewData);
        require 'app/views/'.$viewName.'.php';
    }
}

?>