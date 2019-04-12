<?php

class loginController extends controller {
    
    function __construct() 

    {
        parent::__construct();
    }
    
    public function index() 

    {
        
        $dados = array();
        
        //FORMULARIO DE LOGAR
        if( isset($_POST['formLogar']) ) {
            
            $this->criaSessaoUsuario($_POST);
            
            header("Location: " . BASE_URL);
            
        }
           
        $this->loadView("login", $dados);
        
    }
    
    public function criaSessaoUsuario($post) 

    {
        
        $_SESSION['usuario'] = array(
            'perfil' => $post['perfil'],
            'login'  => $post['login'],
            'senha'  => $post['senha']
        );
        
    }

}
