<?php
require './ambient.php';
global $configr;

//pasta raiz do sistema
define('RAIZ', '/blog_template');

$configr = array();

if (ENVIRONMENT == 'development') 
{
    $configr['TIPO']        = 'mysql';
    $configr['BDSERVER']    = 'localhost';
    $configr['BDNOME']      = 'blog';
    $configr['USER']        = 'root';
    $configr['PASS']        = '';
}
else //caso não esteja no ambiente de desenvolvimento
{
    //setar esse vetor com os valores do servidor
    $configr['TIPO']        = CNFGR_DBTYPE;
    $configr['BDSERVER']    = CNFGR_DBHOST;
    $configr['BDNOME']      = CNFGR_DBNAME;
    $configr['USER']        = CNFGR_DBUSER;
    $configr['PASS']        = CNFGR_DBPASS;
}

?>

