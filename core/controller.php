<?php
class controller 
{
   
    public function loadView($viewName, $viewData = array()) 
    {
        extract($viewData); //transformo os indices do vetor em variáveis
        include_once 'view/'.$viewName.'.php';
    }
    
   
    public function templateView($viewName, $viewData = array()) 
    {
        include_once 'assets/comum/header.php';
        $this->loadView($viewName, $viewData);
        include_once 'assets/comum/footer.php';
    }
    
}

?>
