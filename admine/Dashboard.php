<?php
session_start();

if($_SESSION["GroupUsers"] == "3"){
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="icon/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../iconn/style.css">
    <script defer src="js/vendor.bundle.base.js"></script>
    <script defer src="js/off-canvas.js"></script>
    <script defer src="js/misc.js"></script>
    <script defer src="js/hoverable.js"></script>
    <title></title>
</head>
<body>
    <div class="container-scroller">
        <!-- starte navbar_liste -->
        <?php include("navbar/navbar_list.php");?>
        <!-- end navbar_liste -->
        <!-- start management admin -->
        <div class="container-fluid page-body-wrapper">
            <!-- starte navbar -->
            <?php include("navbar/navbar.php");?>
            <!-- end navbar -->
        </div>
        <!-- end management admin -->
    </div>
</body>
</html>


<?php    
}else{
    header('Location: ../sign in.php');
    exit();
}
?>