<?php
class Core 
{
    private $currentController;
    private $currentAction;


    public function run() 
    {
        $urlCompleta = $_SERVER['PHP_SELF']; 
        $urlCompleta = explode('index.php', $urlCompleta);
        
        $url = $urlCompleta[1];
        
        $parametros = array();
        
        if (!empty($url)) //vejo se o usuario digitou alguma coisa
        {
            $url = explode('/', $url);
            array_shift($url); //tiro a primeira '/' 
            if (isset($url[0]) && $url[0] != '') 
            {   
                $this->currentController = $url[0]."Controller";
                array_shift($url); //guardo o valor na variavel acima e tiro ele do vetor aqui
            }
            else 
            {
                $this->currentController    = 'homeController';
            }
            if (isset($url[0]) && $url[0] != '') 
            {
                $this->currentAction = $url[0];
                array_shift($url); //guardo o valor na variavel acima e tiro ele do vetor aqui
            }
            else
            {
                $this->currentAction = 'index';
            }
            if (count($url) > 0) 
            {
                $parametros = $url;
            }
        }
        else
        {
            $this->currentController    = 'homeController';
            $this->currentAction        = 'index';
        }
        
        $currentController  = $this->currentController;
        $currentAction      = $this->currentAction;
        
        if(!file_exists('controllers/'.$currentController.".php") || !method_exists($currentController, $currentAction))
        {
            $currentController = 'notfoundController';
            $currentAction = 'index';
        }

        $chamaController = new $currentController();
        call_user_func_array(array($chamaController,$currentAction), $parametros);//isso transforma meu array $parametros em varios parametros
    }
                
}

?>
