<?php

/**
 * Class Leer
 * 
 * @version 0.9
 * @author izv
 * @license http://URL name
 * @copyright (c) izv, John Doe
 * 
 * Esta clase dispone de los métodos para la lectura de parámetros usados en
 * los métodos GET y POST
 */

class Leer {
    
    
    /**
     * Trata de leer el parámetro de entrada que se pasa como argumento
     * 
     * @access public
     * @param string $param cadena con el nombre del parámetro
     * @return string | array | null 
    */
    public static function get($param) {
    
        if(isset($_GET[$param])){
            $v = $_GET[$param];
            if (is_array($v)){
                return Leer::leerArray($v);
            } else {
                return Leer::limpiar($_GET[$param]);
            }        
        } else {
            return NULL;
        }
        return $_GET[$param];
    }
    
    public static function post($param) {
    
        if(isset($_POST[$param])){
            $v = $_POST[$param];
            if (is_array($v)){
                return Leer::leerArray($v);
            } else {
                return Leer::limpiar($_POST[$param]);
            }    
        } else {
            return NULL;
        }
        return $_POST[$param];
    }
    
    public static function request($param) {
        
        $v = Leer::get($param);
        
        if($v==NULL){
            $v = Leer::post($param);
        }
    
        return $v;
    }
    
    public static function isArray($param) {
        if (isset($_GET[$param])){
            return is_array($_GET[$param]);
        }
        elseif (isset($_POST[$param])){
            return is_array($_POST[$param]);
        }
        
        return null;
    }

    /*
     * Este método sería equivalente al anterior, pero procesa el array, por lo que 
     * no nos interesa ahora.
     * 
     * public static function isArray($param) {
        return is_array(Leer::request($param))
    }
     */
        private static function leerArray($param) {
        $array = array();
            foreach ($param as $key => $value){
                $array = Leer::limpiar($value);
            }
            return $array;
    }

        private static function limpiar($param){
        return $param;
    }
    
    
    
    
}
