<?php

require_once("model/Database.php");

class Customer extends Database{


public function addCustomer(){
    $dbAddMember = $this->dbConnect();
    $reqAddMember = $dbAddMember->prepare('INSERT INTO customer(pseudo,mdp,email,telephone,date_subscribe) VALUES(:val1,:val2,:val3,:val4,NOW())');
    $reqAddMember->execute(array(
        'val1'=>$_POST['nom'],
        'val2'=>password_hash($_POST['mdp'], PASSWORD_DEFAULT),
        'val3'=>$_POST['mail'],
        'val4'=>$_POST['tel']
    ));
}




public function checkCustomer($pseudo){
    $dbCheckUser =  $this->dbConnect();
    $reqCheckUser = $dbCheckUser->prepare('SELECT pseudo From customer WHERE pseudo = ?');
    $reqCheckUser->execute(array($pseudo));
    $count = $reqCheckUser->rowCount();
    if ($count > 0) {
      return true;
    }else{
        return false;
    }
}


public function checkPassword($pseudo){
    $db = $this->dbConnect();
    $check = $db->prepare('SELECT id_customer,mdp,email,telephone,date_subscribe From customer WHERE pseudo = ?');
    $check->execute(array($pseudo));
    $infoUser = $check->fetch();
    return $infoUser;
}


public function theListCst(){
    $dbCst = $this->dbConnect();
    $reqListCst =  $dbCst->query('SELECT id_customer,mdp,email,telephone,date_subscribe From customer' );
    return $reqListCst;
}



}