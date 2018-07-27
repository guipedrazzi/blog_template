<?php

class model 
{
    protected $pdo;
   
    public function __construct() 
    {
        global $configr;
        $this->pdo = new PDO($configr['TIPO'].':dbname='.$configr['BDNOME'].';host='.$configr['BDSERVER'],$configr['USER'],$configr['PASS']);
        date_default_timezone_set('America/Sao_Paulo');
    }
    
   

   
    protected function dateBase($data)
    {
        $forma = explode('/', $data);
        $dateBase = $forma[2]."-".$forma[1]."-".$forma[0];
        return $dateBase;
    }


    public function dateFront($data)
    {
        $forma = explode('-', $data);
        $dateFront = $forma[2]."/".$forma[1]."/".$forma[0];
        return $dateFront;
    }    

    
    public  function minToHora($tempo)
    {
        $hora = floor($tempo/60);
        $resto = $tempo%60;
        return $hora.':'.$resto;
    }
    

    public function phoneFormat($nu) 
    {
        return "(".substr("$nu",0,2).")".substr("$nu",2,-4)."-".substr("$nu",-4);
    }

    public function cpfFormat($nu) 
    {
        return substr("$nu",0,3).".".substr("$nu",3,3).".".substr("$nu",6,3)."-".substr("$nu",9,2);
    }

    public function currencyBaseFormat($string) 
    {
        $origens  = array('R$', '.', ',');
        $destinos = array('', '', '.');
        $valor     = (floatval(str_replace($origens, $destinos, $string)));
        return $valor;
    }
    
    
    public function getMonth($m)
    {
        if (strlen($m) < 2 )
        {
            $ma = '0'.$m;
        }
        else
        {
            $ma = $m;
        }
        
        switch ($ma) 
        {
                case "01":    $mes = 'Janeiro';     break;
                case "02":    $mes = 'Fevereiro';   break;
                case "03":    $mes = 'Março';       break;
                case "04":    $mes = 'Abril';       break;
                case "05":    $mes = 'Maio';        break;
                case "06":    $mes = 'Junho';       break;
                case "07":    $mes = 'Julho';       break;
                case "08":    $mes = 'Agosto';      break;
                case "09":    $mes = 'Setembro';    break;
                case "10":    $mes = 'Outubro';     break;
                case "11":    $mes = 'Novembro';    break;
                case "12":    $mes = 'Dezembro';    break; 
        }
        return $mes;
    }


}   
?>
