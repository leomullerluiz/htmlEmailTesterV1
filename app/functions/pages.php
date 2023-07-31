<?php

    function loadPage(){
        $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
        $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";
        if(!file_exists($page)){
            //throw new Exception("ERRO>>404");
            echo "Erro 404";
        }else{
            return $page;
        }
        
    }

?>