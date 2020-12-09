<?php 

    // Checking if an action has activated / Verificando se alguma ação foi ativida
    if($_GET["method"] == "startAction")
    {
        // Starting an action / Começando uma ação
        include "controller/ActionController.php";
        $class = new ActionController();
        $class->startAction();
    }
    else
    {
        // Redirecting to the home page / Redirecionando para a página inicial
        include "controller/HomeController.php";
        $home = new HomeController();
        $home->home();
    }

?>