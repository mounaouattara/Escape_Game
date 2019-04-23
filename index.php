<?php
    //variable p qui recupere les différentes pages dans l'url
    if(!isset($_GET['p'])){
        $page = 'niveau_one';
    }
    else{
        if(!file_exists("pages/".$_GET['p'].".php"))
            $page = "404";
        else
            $page = $_GET['p'];
    }

    ob_start();
        include "pages/".$page.".php";
        $content = ob_get_contents();
    ob_end_clean();

    include "layout.php";
?>