<?php

class Sessao {
    
    public static function getSessionId() {
        
        return $_SESSION['usuario'];
        
    }
    
    public static function getSessionName() {
        
        return $_SESSION['sessionUser']['nameUser'];
        
    }
    
    public static function getSessionEmail() {
        
        //return $_SESSION['sessionUser']['emailUser'];
        
    }
    
    public static function getSessionImage() {
        
        return $_SESSION['sessionUser']['imgUser'];
        
    }
    
    public static function getSessionIdAtletica() {
        
        return $_SESSION['sessionUser']['idAtletica'];
        
    }
    
    public static function getSessionNivel() {
        
        //return $_SESSION['sessionUser']['nivelUser'];
        
    }
}
