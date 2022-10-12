<?php

include("data.php");

// $EmailUserName =  Array();

// verification users name
if(isset($_POST['username'])){

    $UserName = $_POST['username'];

    $sql = "SELECT * FROM users WHERE UserName = :username";

    // Prepare statement
    $stmt = $con->prepare($sql);
    $stmt-> bindParam(':username', $UserName, PDO::PARAM_STR);

    // execute the query
    $stmt->execute();


    $results=$stmt->fetchAll(PDO::FETCH_OBJ);
    if($stmt->rowCount() > 0){
        foreach ($results as $row) {
                $UserName=$row->UserName;
        };
    }else{
        $UserName = "no";
    };

    // $EmailUserName['UserName'] = $UserName;

};

// verification email
if(isset($_POST['email'])){

    $Email = $_POST['email'];

    $sql = "SELECT * FROM users WHERE Email = :email";

    // Prepare statement
    $stmt = $con->prepare($sql);
    $stmt-> bindParam(':email', $Email, PDO::PARAM_STR);

    // execute the query
    $stmt->execute();


    $results=$stmt->fetchAll(PDO::FETCH_OBJ);
    if($stmt->rowCount() > 0){
        foreach ($results as $row) {
                $Email=$row->Email;
        };
    }else{
        $Email = "no";
    }

    // $EmailUserName['Email'] =  $Email;

};


// print_r($EmailUserName);

if(isset($_POST['username']) && isset($_POST['email'])){
    echo $UserName . "," . $Email ;
}else if(isset($_POST['username'])){
    echo $UserName ;
}else if(isset($_POST['email'])){
    echo $Email ;
}




