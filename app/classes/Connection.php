<?php

    namespace app\classes;

    class Connection{
        // Padrão Singleton para uma unica instancia da aplicação
        private static $instance;

        public static function getConn(){
            if(!isset(self::$instance)){
                self::$instance = new \PDO('mysql:host=localhost;dbname=htmlEmailTesterV1', 'root', '');
            }
            
            return self::$instance;
            
        }
    }
?>