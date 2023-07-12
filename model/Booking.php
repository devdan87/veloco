<?php

require_once("model/Database.php");


class Booking extends Database{

public function addBooking(){
    $dbAddMember = $this->dbConnect();
    $reqAddMember = $dbAddMember->prepare('INSERT INTO booking(id_customer,pseudo,lieu,type_bike,date_booking) VALUES(:val1,:val2,:val3,:val4,NOW())');
    $reqAddMember->execute(array(
        'val1'=>$_SESSION['id'],
        'val2'=>password_hash($_POST['mdp'], PASSWORD_DEFAULT),
        'val3'=>$_POST['mail'],
        'val4'=>$_POST['tel']
    ));
}


}