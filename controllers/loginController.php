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

        $_SESSION['items'][1] = array(
            'descricao'                   => 'PAPEL BOBINADO',
            'tratamento_diferenciado'     => '-',
            'aplicabilidade_decreto_7174' => 'Não',
            'aplic_margem_preferencia'    => 'Não',
            'unid_fornec'                 => 'ROLO 30,00 M',
            'qtd_estimada'                => 100
        );

        $_SESSION['items'][2] = array(
            'descricao'                   => 'GRAXA',
            'tratamento_diferenciado'     => '-',
            'aplicabilidade_decreto_7174' => 'Não',
            'aplic_margem_preferencia'    => 'Não',
            'unid_fornec'                 => 'RECIPIENTE 1,00 KG',
            'qtd_estimada'                => 4
        );

        $_SESSION['items'][3] = array(
            'descricao'                   => 'AÇÚCAR',
            'tratamento_diferenciado'     => '-',
            'aplicabilidade_decreto_7174' => 'Não',
            'aplic_margem_preferencia'    => 'Não',
            'unid_fornec'                 => 'PACOTE 1,00 KG',
            'qtd_estimada'                => 300
        );

        $_SESSION['items'][4] = array(
            'descricao'                   => 'CAPA CORTE CABELO',
            'tratamento_diferenciado'     => '-',
            'aplicabilidade_decreto_7174' => 'Não',
            'aplic_margem_preferencia'    => 'Não',
            'unid_fornec'                 => 'UNIDADE',
            'qtd_estimada'                => 20
        );

        $_SESSION['items'][5] = array(
            'descricao'                   => 'TINTA ESMALTE',
            'tratamento_diferenciado'     => '-',
            'aplicabilidade_decreto_7174' => 'Não',
            'aplic_margem_preferencia'    => 'Não',
            'unid_fornec'                 => 'GALÃO 3,6 L',
            'qtd_estimada'                => 7
        );

        $_SESSION['items'][6] = array(
            'descricao'                   => 'APARELHO SOM',
            'tratamento_diferenciado'     => '-',
            'aplicabilidade_decreto_7174' => 'Não',
            'aplic_margem_preferencia'    => 'Não',
            'unid_fornec'                 => 'UNIDADE',
            'qtd_estimada'                => 2
        );
        
    }

}
