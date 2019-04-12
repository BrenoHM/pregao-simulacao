<?php

class logoutController extends controller {
    
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        
        $redirect = "";
        //if( Sessao::getSessionNivel() == 'atletica' ){
            //$redirect = "/login/atletica";
        //}
        
        unset($_SESSION['usuario']);
        header("Location: " . BASE_URL . $redirect);
        
    }
 
}
