<?php

class configuracoesController extends controller {
    
    function __construct() {
        parent::__construct();
    }
    
    public function index() 

    {
        
        if( Sessao::getSessionId() != "" ){
            
            $dados = array();

            if ( isset($_POST['salvar']) ) {
                
                $_SESSION['situacaoLance'] = $_POST['situacaoLance'];
                $dados['aviso'] = $this->mensagemSucesso('Situação de lance alterada com sucesso!');

            }

            $dados['situacaoLance'] = $_SESSION['situacaoLance'];

            $this->loadTemplate('configuracoes/configuracoes', $dados);
            
        }else{
            header("Location: " . BASE_URL . "/login");
        }
        
    }
    
}