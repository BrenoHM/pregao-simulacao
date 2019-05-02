<?php

class lancesController extends controller {

    //public $now = date("Y-m-d H:i:s");
    public $tempoMudaStatus = "60";
    public $tempoGeraLance  = "15";
    
    function __construct()

    {

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

            if( !isset( $_SESSION['lances'][$idProposta] ) ){
                $this->rotinaGeraLance($idProposta);
            }

            $this->mudaStatus();

            $this->geraLances($idProposta, false);

            if( isset($_POST['cadastrar']) ) {

                $post = $_POST;

                $search        = array('.', ',');
                $replace       = array('', '.');
                //$ultimo        = str_replace($search, $replace, $_SESSION['lances'][$idProposta][$post['item']]['ultimo']);
                $melhor        = $_SESSION['lances'][$idProposta][$post['item']]['melhor'];

                if( str_replace($search, $replace, $post['lance']) <= str_replace($search, $replace, $melhor) ) {
                    $_SESSION['lances'][$idProposta][$post['item']]['melhor'] = $post['lance'];
                }

                $_SESSION['lances'][$idProposta][$post['item']]['ultimo'] = $post['lance'];

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

            $dados['lances'] = $_SESSION['lances'][$idProposta];

            $dados['proposta'] = $_SESSION['usuario']['propostas'][$idProposta];
            
            if( $_SESSION['situacaoLance'] == 'EA' ){
                $this->loadTemplate('pregao-eletronico/lances/encerrado', $dados);
            }else{
                $this->loadTemplate('pregao-eletronico/lances/cadastrar', $dados);    
            }
            
        }else{
            header("Location: " . BASE_URL . "/login");
        }
        
    }

    public function mudaStatus()

    {

        $now = date("Y-m-d H:i:s");

        if( !empty($_SESSION['mudaSituacaoLance']) ) {

            if( (strtotime($now) > strtotime($_SESSION['mudaSituacaoLance'])) ) {

                if( $_SESSION['situacaoLance'] == 'A' ) {
                    $_SESSION['situacaoLance'] = "AI";
                }else if( $_SESSION['situacaoLance'] == 'AI' ){
                    $_SESSION['situacaoLance'] = "EA";
                }else if( $_SESSION['situacaoLance'] == 'EA' ){
                    $_SESSION['situacaoLance'] = "A";
                }

                $_SESSION['mudaSituacaoLance'] = date("Y-m-d H:i:s", strtotime( $now ." +".$this->tempoMudaStatus." seconds"));
            }

        }else{

            $_SESSION['mudaSituacaoLance'] = date("Y-m-d H:i:s", strtotime( $now ." +".$this->tempoMudaStatus." seconds"));

        }
        
    }

    public function geraLances($idProposta, $zeraUltimo = true)

    {

        $now = date("Y-m-d H:i:s");

        if( !empty($_SESSION['geraLance']) ) {

            if( (strtotime($now) > strtotime($_SESSION['geraLance'])) ) {
                
                if($_SESSION['situacaoLance'] != "EA"){

                    $this->rotinaGeraLance($idProposta, $zeraUltimo);

                }
                $_SESSION['geraLance'] = date("Y-m-d H:i:s", strtotime( $now ." +".$this->tempoGeraLance." seconds"));
            }

        }else{

            $_SESSION['geraLance'] = date("Y-m-d H:i:s", strtotime( $now ." +".$this->tempoGeraLance." seconds"));

        }

    }


    public function rotinaGeraLance($idProposta, $zeraUltimo = true)

    {
        foreach ($_SESSION['items'] as $idItem => $value) {

            $valor = rand(1, 99999);

            $search        = array('.', ',');
            $replace       = array('', '.');
            if( ($valor < @str_replace($search, $replace, $_SESSION['lances'][$idProposta][$idItem]['melhor'])) || !isset($_SESSION['lances'][$idProposta][$idItem]['melhor']) ){
                if( !isset($_SESSION['lances'][$idProposta][$idItem]['melhor']) ){
                    if( isset($_SESSION['usuario']['propostas'][$idProposta]['itens'][$idItem]['valor_total']) ){
                        $_SESSION['lances'][$idProposta][$idItem]['melhor'] = number_format((str_replace($search, $replace, $_SESSION['usuario']['propostas'][$idProposta]['itens'][$idItem]['valor_total']) * 0.9), 2, ',', '.');
                    }else{
                        $_SESSION['lances'][$idProposta][$idItem]['melhor'] = number_format($valor, 2, ',', '.');
                    }
                }else{
                    $_SESSION['lances'][$idProposta][$idItem]['melhor'] = number_format($valor, 2, ',', '.');
                }
            }

            if( $zeraUltimo ) {
                if( isset($_SESSION['usuario']['propostas'][$idProposta]['itens'][$idItem]['valor_total']) ){
                    $_SESSION['lances'][$idProposta][$idItem]['ultimo'] = $_SESSION['usuario']['propostas'][$idProposta]['itens'][$idItem]['valor_total'];
                }else{
                    $_SESSION['lances'][$idProposta][$idItem]['ultimo'] = 0;
                }
            }

        }
    }
    
}