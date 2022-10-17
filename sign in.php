<?php
  session_start();
  $active = "signIn";
  if(!isset($_SESSION["lang"])){
    $_SESSION["lang"] = "en";
  };

  if(isset($_GET["lang"])){
    $_SESSION["lang"] = $_GET["lang"];
  };

  if($_SESSION["lang"] == "en"){
    include("Languages/English.php");
  }else{
    include("Languages/Arabic.php");
  };

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $_SESSION["Username"] = $_POST["Username"];

    include("database/classdata.php");

    $db = new Database();
    $db = $db->select($_SESSION["Username"]);

    foreach ($db as $row) {
      $_SESSION["GroupUsers"]=$row->GroupUsers;
      $_SESSION["ValidationEmail"]=$row->ValidationEmail;
      $_SESSION["Email"]=$row->Email;
    };

    if($_SESSION["ValidationEmail"] == "0"){
        header('Location: users/verification.php');
        exit();
    }
  }
?>
<!DOCTYPE html>
<html dir="<?php echo $_SESSION["lang"] == "en" ? "ltr":"rtl";?>" lang="<?php echo $_SESSION["lang"];?>">
<head>
  <?php include("head/link_css.php") ?>
  <link rel="stylesheet" href="css/sign.css">
  <?php
  if($_SESSION["lang"] == "ar"){
    echo '<link rel="stylesheet" href="css/arsign.css">' ;
  }  
  ?>
  <!-- // css  -->
  <!-- script js -->
  <?php include("head/link_javascript.php") ?>
  <!-- jquery sign in  -->
  <script defer type="module"  src="js/sign in.js"></script>
  <!-- //script js -->
</head>
<body>
  <!-- header -->
  <?php
    include("header_footer/header.php");
  ?>
  <!-- //header -->
  <!-- sign in  -->
  <div class="sign">
    <div class="screen">
      <div class="screen__content">
        <form class="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="login__field">
            <i class="login__icon icon-user"></i>
            <input type="text" name="Username" class="login__input">
            <label for="Username" class="labelsign"><?php echo lang("Username") ?></label>
          </div>
          <div class="login__field">
            <i class="login__icon icon-locked"></i>
            <input type="password" name="Password" class="login__input" >
            <label for="Password" class="labelsign"><?php echo lang("Password") ?></label>
            <i class="eye"></i>
          </div>
          <button class="btnn login__submit">
            <span class="button__text"><?php echo lang("Log In Now") ?></span>
            <i class="button__icon icon-chevron-right"></i>
          </button>	
            <a href="sign up.php" class="signin">
              <span class="button__text"><?php echo lang("Log Up Now") ?></span>
              <i class=" icon-chevron-left"></i>
            </a>				
        </form>
      </div>
      <div class="screen__background">
      <span class="screen__background__shape4"></span>
        <span class="screen__background__shape screen__background__shape3"></span>		
        <span class="screen__background__shape screen__background__shape2"></span>
        <span class="screen__background__shape screen__background__shape1"></span>
      </div>		
    </div>
  </div>
  <!-- /sign in  -->
  <!-- footer -->
  <?php
    include("header_footer/footer.php");
  ?>
  <!-- //footer -->
</body>
</html>