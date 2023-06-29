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
    }






}else{
    $page = new Controller;
    $page->connexionPage();
}