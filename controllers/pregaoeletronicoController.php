<?php

class pregaoeletronicoController extends controller {
    
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        
        if( Sessao::getSessionId() != "" ){
            
            $dados = array();
            
            $this->loadTemplate('pregao-eletronico/index', $dados);
            
        }else{
            header("Location: " . BASE_URL . "/login");
        }
        
    }
    
}