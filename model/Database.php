
<?php



class Database{


    protected function dbConnect(){
        $db = new PDO('mysql:host=localhost;dbname=veloca;charset=utf8','root','');
        return $db;
    }
    


}