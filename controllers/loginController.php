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
            'senha'  => $post['senha'],
            'pregao' => array(
                'num_pregao'    => 662014,
                'cod_uasg'      => 200999,
                'orgao'         => 'MIN. DO PLANEJAMENTO ORCAMENTO E GESTAO/DF',
                'data_abertura' => '22/05/2014 16:00',
                'srp'           => 'Não',
                'icms'          => 'Não'
            ),
            'propostas' => array(
                /*'idProposta'          => '',
                'codigo'              => '',
                'orgao'               => '',
                'num_pregao'          => '',
                'data_envio_proposta' => '',
                'data_sessao_publica' => '',*/
            )
        );
        
    }

}
