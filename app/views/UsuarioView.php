
<?php
require_once('./libs/Smarty.class.php');

class UsuarioView{
    private $smarty; // Solo tiene acceso en esa clase
    private $base_url;

    public function __construct() {

    $this->smarty = new Smarty();
    $this->base_url = 'http://' .$_SERVER['SERVER_NAME']. ':' .$SERVER['SERVER_PORT'];
    }

    public function login(){
        
    }









    public function showHome(){
        //$smarty = new smarty(); // Declaramos el smarty
        //$smarty->display('templates/haeder.tpl');
        
       // require_once('templates/index.php');
       
    }
}