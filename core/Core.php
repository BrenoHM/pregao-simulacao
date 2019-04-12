<?php

class Core {
    
    public function run(){
        
        $url = '/' . ( ( isset($_GET['q']) ? $_GET['q'] : '' ) );
        $params = array();
        
        if( !empty($url) && $url != '/' ) {
            
            $url = explode("/", $url);
            array_shift($url);

            $currentController = str_replace("-", "", $url[0]) . 'Controller';
            array_shift($url);
            
            if(isset($url[0]) && !empty($url[0])) {
                $currentAction = $url[0];
                array_shift($url);
            } else {
                $currentAction = 'index';
            }
            
            if( count($url) > 0 ) {
                $params = $url;
            }
            
        }else{
            
            $currentController = 'homeController';
            $currentAction = 'index';
            
        }
        
        if( !class_exists($currentController) ) {
            $currentController = "erroController";
        }
        
        $c = new $currentController();
        
        if( !method_exists($c, $currentAction) ) {
            $currentController = "erroController";
            $currentAction = 'index';
            $c = new $currentController();
        }
        
        call_user_func_array(array($c, $currentAction), $params);
        
    }
    
}