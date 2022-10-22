<?php

class Database{

    private string $servername = "localhost";
    private string $username = "root";
    private string $password = "";
    private string $dbname = "hotelproject";

    //--------------------------
    // connection database
    // -------------------------
    public  function connection(){
        $con =  new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    }

    //--------------------------------------
    // Database extraction from table users
    // -------------------------------------

    public  function select($UserName){
        $con = $this->connection();
        $sql = "SELECT * FROM users WHERE UserName='$UserName'";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $result ;
    }

}




?>