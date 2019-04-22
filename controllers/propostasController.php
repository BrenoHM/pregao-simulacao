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

            $dados['show'] = false;

            if( isset($_POST['cadastrar']) ) {

                $post = $_POST;

                //GERA ID PARA PROPOSTA
                $id = date('His');

                //INICIO INSERE A PROPOSTA
                $ciente_edital          = $post['ciente_edital'];
                $ciente_obrigatoriedade = $post['ciente_obrigatoriedade'];
                $declaro_emprego        = $post['declaro_emprego'];
                $proposta_independente  = $post['proposta_independente'];

                $_SESSION['usuario']['propostas'][$id] = array(
                    'ciente_edital'          => $ciente_edital,
                    'ciente_obrigatoriedade' => $ciente_obrigatoriedade,
                    'declaro_emprego'        => $declaro_emprego,
                    'proposta_independente'  => $proposta_independente
                );

                //INSERE OS ITENS
                foreach ($post['idItem'] as $key => $idItem) {

                    $valor_unit             = $post['valor_unit'][$key];
                    $valor_total            = $post['valor_total'][$key];
                    $marca                  = $post['marca'][$key];
                    $fabricante             = $post['fabricante'][$key];
                    $descricao              = $post['descricao'][$key];

                    if( !empty($valor_unit) || !empty($valor_total) || !empty($marca) || !empty($fabricante) || !empty($descricao) ) {

                        //INCUI ITEM NA PROPOSTA
                        $_SESSION['usuario']['propostas'][$id]['itens'][$idItem] = array(
                            'valor_unit'  => $valor_unit,
                            'valor_total' => $valor_total,
                            'marca'       => $marca,
                            'fabricante'  => $fabricante,
                            'descricao'   => $descricao
                        );

                    }

                }

                //echo "<META http-equiv='refresh' content='1;URL=".BASE_URL."/propostas/editar/".$id."'>";
                echo "<script>window.location.href = '".BASE_URL."/propostas/editar/".$id."'</script>";

            }

            $dados['itens'] = $_SESSION['items'];
            
            $this->loadTemplate('pregao-eletronico/propostas/cadastrar', $dados);
            
        }else{
            header("Location: " . BASE_URL . "/login");
        }
        
    }

    public function editar($idProposta)

    {
        if( Sessao::getSessionId() != "" ){

            $dados = array();

            $dados['titulo']   = "Editar a Proposta";

            $dados['alterar'] = false;

            $dados['show']    = false;

            if( isset($_POST['alterar']) || (isset($_POST['alteracao']) && $_POST['alteracao']) ) {
                $dados['alterar'] = true;
            }

            if( isset($_POST['excluir']) ) {

                if( isset($_POST['delItem']) ){
                    foreach ( $_POST['delItem'] as $item ) {
                        unset($_SESSION['usuario']['propostas'][$idProposta]['itens'][$item]);
                    }
                    $dados['aviso'] = $this->mensagemSucesso("Item(s) excluído(s) com sucesso!");
                }else{
                    $dados['aviso'] = $this->mensagemErro("Erro: é necessário escolher ao menos um item para exclusão!");
                }
                
            }

            if( isset($_POST['cadastrar']) ) {

                $post = $_POST;

                $id = $idProposta;

                //INICIO INSERE A PROPOSTA
                $ciente_edital          = $post['ciente_edital'];
                $ciente_obrigatoriedade = $post['ciente_obrigatoriedade'];
                $declaro_emprego        = $post['declaro_emprego'];
                $proposta_independente  = $post['proposta_independente'];

                $_SESSION['usuario']['propostas'][$id] = array(
                    'ciente_edital'          => $ciente_edital,
                    'ciente_obrigatoriedade' => $ciente_obrigatoriedade,
                    'declaro_emprego'        => $declaro_emprego,
                    'proposta_independente'  => $proposta_independente
                );

                //INSERE OS ITENS
                foreach ($post['idItem'] as $key => $idItem) {

                    $valor_unit             = $post['valor_unit'][$key];
                    $valor_total            = $post['valor_total'][$key];
                    $marca                  = $post['marca'][$key];
                    $fabricante             = $post['fabricante'][$key];
                    $descricao              = $post['descricao'][$key];

                    if( !empty($valor_unit) || !empty($valor_total) || !empty($marca) || !empty($fabricante) || !empty($descricao) ) {

                        //INCUI ITEM NA PROPOSTA
                        $_SESSION['usuario']['propostas'][$id]['itens'][$idItem] = array(
                            'valor_unit'  => $valor_unit,
                            'valor_total' => $valor_total,
                            'marca'       => $marca,
                            'fabricante'  => $fabricante,
                            'descricao'   => $descricao
                        );

                    }

                }

                echo "<script>window.location.href = '".BASE_URL."/pregao-eletronico/'</script>";

            }

            $dados['proposta'] = $_SESSION['usuario']['propostas'][$idProposta];

            $dados['itens'] = $_SESSION['items'];

            $this->loadTemplate('pregao-eletronico/propostas/editar', $dados);

        }else{
            header("Location: " . BASE_URL . "/login");
        }
    }

    public function consultar()

    {

        $dados = array();

        $dados['propostas'] = $_SESSION['usuario']['propostas'];

        $this->loadTemplate('pregao-eletronico/propostas/consultar', $dados);

    }

    public function show($idProposta)

    {

        $dados = array();

        $dados['titulo']   = "Proposta";

        $dados['alterar']  = false;

        $dados['show']     = true;

        $dados['proposta'] = $_SESSION['usuario']['propostas'][$idProposta];

        $dados['itens']    = $_SESSION['items'];

        $this->loadTemplate('pregao-eletronico/propostas/editar', $dados);

    }
    
}