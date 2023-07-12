<?php

require_once("model/Database.php");

require_once("model/Customer.php");




class Controller{

    public function subscribePage(){
        require("view/subscribe.php");
    }

    public function connexionPage(){
        require("view/connexion.php");
        ?><script>$("header").css("display","none")</script><?php
        ?><script>$("footer").css("display","none")</script><?php
    }

    public function welcomePage(){
       require("view/welcome.php");
    }

    public function disconnectPage(){
        require("view/deconnexion.php");
        ?><script>$("header").css("display","none")</script><?php
        ?><script>$("footer").css("display","none")</script><?php
    }

    public function validCustomer(){
        $checkTheUser = new Customer;
        $checking = $checkTheUser->checkCustomer($_POST['nom']);
         if ($checking === true){
             require("view/error.php");
             
             ?><script>$("#psdExist").css("display","block")</script>  <?php
            
         }
        else{
         $customer= new Customer;
             $customer->addCustomer();
             require("view/connexion.php");
            
             
         } 
     }
    
    


     public function verifyConnexion(){
        $checkCo = new Customer;
        $checkTheCo =  $checkCo->checkPassword($_POST['psdCo']);
        $passCheck = password_verify($_POST['pswCo'], $checkTheCo['mdp']);
        $nameCheck =  $checkCo->checkCustomer($_POST['psdCo']);
        if ($passCheck==true &&  $nameCheck==true) {
          require("view/welcome.php");
        }else{
          require("view/error.php");
          ?><script>$("#errorCo").css("display","block")</script>  <?php
          
        }
    }

    public function listCst(){
        $cst = new Customer;
        $showCst = $cst->theListCst();
        require("view/listCustomer.php");
    }

}