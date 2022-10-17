<?php
session_start();
$active = "verification";
if(!isset($_SESSION["lang"])){
  $_SESSION["lang"] = "en";
};

if(isset($_GET["lang"])){
  $_SESSION["lang"] = $_GET["lang"];
};

if($_SESSION["lang"] == "en"){
  include("../Languages/English.php");
}else{
  include("../Languages/Arabic.php");
};

if(isset($_SESSION['Email'])){
?>
  <!DOCTYPE html>
  <html dir="<?php echo $_SESSION["lang"] == "en" ? "ltr":"rtl";?>" lang="<?php echo $_SESSION["lang"];?>">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href="../css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
      <link rel="stylesheet" href="../css/users/verification.css" />
      <link rel="stylesheet" href="../iconn/style.css"/>
      <script defer src="js/bootstrap/bootstrap.min.js"></script>
      <script defer src="../js/users/verification.js"></script>
      <title><?php echo $active ;?></title>
    </head>
    <body>
      <div class="verification">
        <div class="container">
            <i class="icon-mail3"></i>
            <h2><?php echo lang("VeriryMessage") ?></h2>
            <h3><?php echo lang("codesent") ?></h3>
            <h3> <?php echo $_SESSION['Email'] ?></h3>
            <div class="code-container">
              <input type="number" class="code" placeholder="0" min="0" max="9" required>
              <input type="number" class="code" placeholder="0" min="0" max="9" required>
              <input type="number" class="code" placeholder="0" min="0" max="9" required>
              <input type="number" class="code" placeholder="0" min="0" max="9" required>
              <input type="number" class="code" placeholder="0" min="0" max="9" required>
              <input type="number" class="code" placeholder="0" min="0" max="9" required>
            </div>
            <button type="button" class="btn btn-success"><?php echo lang("Verify") ?></button>
            <div class="code1">
              <a><?php echo lang("Resendcode") ?></a>
              <a><?php echo lang("Changeemail") ?></a>
            </div>
        </div>
      </div>
      <div class="awda">
        <a href=""><?php echo lang("backtohomepage") ?></a>
      </div>
    </body>
  </html>

<?php
}else{
  header('Location: ../sign up.php');
  exit();
}
?>

