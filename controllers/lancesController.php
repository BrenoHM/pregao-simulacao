<?php

class lancesController extends controller {
    
    function __construct() {
        parent::__construct();
    }
    
    public function index() 

    {
        
        if( Sessao::getSessionId() != "" ){
            
            $dados = array();

            $dados['propostas'] = $_SESSION['usuario']['propostas'];

            $this->loadTemplate('pregao-eletronico/lances/index', $dados);
            
        }else{
            header("Location: " . BASE_URL . "/login");
        }
        
    }

    public function cadastrar($idProposta) 

    {
        
        if( Sessao::getSessionId() != "" ){
            
            $dados = array();

            $dados['show'] = false;

            $dados['lanceInserido'] = false;

            if( isset($_POST['cadastrar']) ) {

                $post = $_POST;

                if( isset( $_SESSION['lances'][$idProposta][$post['item']] ) ){

                    $search        = array('.', ',');
                    $replace       = array('', '.');
                    $ultimo        = str_replace($search, $replace, $_SESSION['lances'][$idProposta][$post['item']]['ultimo']);
                    $melhor        = $_SESSION['lances'][$idProposta][$post['item']]['melhor'];
                    //$post['lance'] = str_replace($search, $replace, $post['lance']);

                    if( str_replace($search, $replace, $post['lance']) >= str_replace($search, $replace, $melhor) ) {
                        $_SESSION['lances'][$idProposta][$post['item']]['melhor'] = $post['lance'];
                    }

                    $_SESSION['lances'][$idProposta][$post['item']]['ultimo'] = $post['lance'];

                }else{
                    $_SESSION['lances'][$idProposta][$post['item']]['ultimo'] = $post['lance'];
                    $_SESSION['lances'][$idProposta][$post['item']]['melhor'] = $post['lance'];
                }

                $dados['lanceInserido'] = true;

            }

            switch ($_SESSION['situacaoLance']) {
                case 'A':
                    $dados['situacaoLance'] = "Aberto";
                    break;
                case 'AI':
                    $dados['situacaoLance'] = "Aviso de Iminência";
                    break;
                case 'EA':
                    $dados['situacaoLance'] = "Encerramento Aleatório";
                    break;
                default:
                    $dados['situacaoLance'] = "-";
                    break;
            }

            $dados['itens']      = $_SESSION['items'];

            $dados['idProposta'] = $idProposta;

            if( isset( $_SESSION['lances'][$idProposta] ) ){
                $dados['lances'] = $_SESSION['lances'][$idProposta];
            }
            
            $this->loadTemplate('pregao-eletronico/lances/cadastrar', $dados);
            
        }else{
            header("Location: " . BASE_URL . "/login");
        }
        
    }
    
}