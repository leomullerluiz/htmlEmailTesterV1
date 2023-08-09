<?php

    function loadPage(){
        //SAMPLE: http://localhost:5000/?page=teste
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