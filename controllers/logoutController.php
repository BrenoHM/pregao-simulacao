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
        unset($_SESSION['items']);
        unset($_SESSION['mudaSituacaoLance']);
        unset($_SESSION['situacaoLance']);
        header("Location: " . BASE_URL . $redirect);
        
    }
 
}
