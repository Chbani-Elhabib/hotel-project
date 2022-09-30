<?php

include("data.php");

// $email = $_REQUEST["email"];
// $email = "bgfdgdgdf@gmail.com";

try {

    $stmt = $con->prepare("SELECT Email FROM users WHERE Email = 'bgfdgdgdf@gmail.com' ");
    $stmt->execute();

    $email = $stmt->setFetchMode(PDO::FETCH_ASSOC);
 
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// $sql = "SELECT Email FROM users WHERE Email = 'bgfdgdgdf@gmail.com'";

// $stmt = $con->prepare($sql);
// // $stmt->bind_param("s", $_GET['email']);

// $stmt->execute();

// $stmt->store_result();
// $stmt->bind_result($email);
// $stmt->fetch();
// $stmt->close();

echo  $email;
