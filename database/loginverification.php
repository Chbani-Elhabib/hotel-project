<?php

include("data.php");

// verification users name and password 
if(isset($_POST['username']) && isset($_POST['Password'])){
    $UserName = $_POST['username'];
    $Password = $_POST['Password'];

    $sql = "SELECT UserName , Passworde FROM users WHERE UserName = :username";

    // Prepare statement
    $stmt = $con->prepare($sql);
    $stmt-> bindParam(':username', $UserName, PDO::PARAM_STR);

    // execute the query
    $stmt->execute();


    $results=$stmt->fetchAll(PDO::FETCH_OBJ);


    if($stmt->rowCount() > 0){
        foreach ($results as $row) {
            if(password_verify($Password,$row->Passworde)) {
                $verify = 'Yes';
            } else {
                $verify = 'No';
            };
        };
    }else{
        $verify = "No";
    };

    echo $verify ;

};