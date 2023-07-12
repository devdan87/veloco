<?php

require('controller/controller.php');


if (isset($_GET['action'])){
    session_start();

    if ($_GET['action'] == "welcome") {
        $page = new Controller;
        $page->welcomePage();
    }elseif ($_GET['action'] == "connect") {
        $page = new Controller;
        $page->connexionPage();
    }elseif ($_GET['action'] == "disconnect") {
        $page = new Controller;
        $page->disconnectPage();
    }elseif ($_GET['action'] == "subscribe") {
        $page = new Controller;
        $page->subscribePage();
        ?><script>$("header").css("display","none")</script><?php
        ?><script>$("footer").css("display","none")</script><?php
    }elseif($_GET['action'] == "validSub"){

if (!empty($_POST["nom"]) && !empty($_POST["mdp"]) && !empty($_POST["tel"]) && !empty($_POST["mail"]) && strlen($_POST["nom"])>1 && strlen($_POST["mdp"])>3) {
    $_POST["nom"] = strip_tags($_POST["nom"]);
    $_POST["mdp"] = strip_tags($_POST["mdp"]);
    $_POST["tel"] = strip_tags($_POST["tel"]);
    $_POST["mail"] = strip_tags($_POST["mail"]);



        $page = new Controller;
        $page->validCustomer();
}else {
    require("view/error.php");
    ?><script>$("#enough").css("display","block")</script><?php
}
    }elseif($_GET['action'] == "validConnexion"){

        if (!empty($_POST["psdCo"]) && !empty($_POST["pswCo"])){

            $_SESSION['pseudo'] = $_POST['psdCo'];
            $_SESSION['password'] = $_POST['pswCo'];

            $page = new Controller;
            $page->verifyConnexion();

            if ($_SESSION["pseudo"]==="admin" && $_SESSION["password"]==="veloco") {
                ?><script>$("#btnAdmin").css("display","block")</script>  <?php
             
            }

        else{
            require("view/error.php");
            ?><script>$("#errorCo").css("display","block")</script><?php
        }

        }else{
            require("view/error.php");
            ?><script>$("#errorCo").css("display","block")</script><?php
        }

      
    }elseif($_GET['action'] == "customer"){
        $page= new Controller;
        $page->listCst();
    }






}else{
    $page = new Controller;
    $page->subscribePage();
}