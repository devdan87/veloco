<?php

require_once("model/Database.php");


class Controller{

    public function subscribePage(){
        require("view/subscribe.php");
    }

    public function connexionPage(){
        require("view/connexion.php");
    }

    public function welcomePage(){
       require("view/welcome.php");
    }

    public function disconnectPage(){
        require("view/deconnexion.php");
    }

    

}