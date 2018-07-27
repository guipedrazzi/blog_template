<?php

/**
 * Teste[teste]<br/>
 * Só para testar o MVC
 * @copyright (c) 2018, Guilherme da Silva Pedrazzi
 */
class Teste extends model
{
    private $nome;
    
    public function getNome() 
    {
        return $this->nome;
    }

    public function setNome($nome) 
    {
        $this->nome = $nome;
    }
    
    public function getAdv() 
    {
       $adv = array() ;
       
       $puxaadv = $this->pdo->prepare('SELECT nome FROM correspondente');
       $puxaadv->execute();
       
       foreach ($puxaadv as $value) {
           $adv[] = $value['nome'];
       }
       
       return $adv;
    }

}

?>
