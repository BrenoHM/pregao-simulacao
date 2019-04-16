<?php

class propostasController extends controller {
    
    function __construct() {
        parent::__construct();
    }
    
    public function index() 

    {
        
        if( Sessao::getSessionId() != "" ){
            
            $dados = array();
            
            if( isset($_POST['filtrar']) ){
                $dados['pregao'] = $_SESSION['usuario']['pregao'];
                $this->loadTemplate('pregao-eletronico/propostas/index', $dados);
            }else{
                $this->loadTemplate('pregao-eletronico/propostas/filtro', $dados);
            }
            
        }else{
            header("Location: " . BASE_URL . "/login");
        }
        
    }

    public function cadastrar($numPregao) 

    {
        
        if( Sessao::getSessionId() != "" ){
            
            $dados = array();

            if( isset($_POST['cadastrar']) ) {

                $post = $_POST;

                //GERA ID PARA PROPOSTA
                
                $id = date('His');

                $_SESSION['usuario']['propostas'][$id] = array(
                    'idProposta'          => $id,
                    'codigo'              => $post['codigo'],
                    'orgao'               => $post['orgao'],
                    'num_pregao'          => $post['num_pregao'],
                    'data_envio_proposta' => $post['data_envio_proposta'],
                    'data_sessao_publica' => $post['data_sessao_publica'],
                );

                echo "<META http-equiv='refresh' content='2;URL=".BASE_URL."/propostas'>";
            }
            
            $this->loadTemplate('pregao-eletronico/propostas/cadastrar', $dados);
            
        }else{
            header("Location: " . BASE_URL . "/login");
        }
        
    }
    
}