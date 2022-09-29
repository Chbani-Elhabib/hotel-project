<?php
  $active = "signIn";

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    echo $_POST["Email"];
    echo $_POST["Password"];

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("head/link_css.php") ?>
  <link rel="stylesheet" href="css/sign in.css">  
  <!-- // css  -->
  <!-- script js -->
  <?php include("head/link_javascript.php") ?>
  <!-- jquery sign in  -->
  <script defer src="js/sign in.js"></script>
  <!-- //script js -->
</head>
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
            <input type="text" name="Email" class="login__input" placeholder="Email">
          </div>
          <div class="login__field">
            <i class="login__icon icon-locked"></i>
            <input type="password" name="Password" class="login__input" placeholder="Password">
            <i class="eye"></i>
          </div>
          <button class="btnn login__submit">
            <span class="button__text">Log In Now</span>
            <i class="button__icon icon-chevron-right"></i>
          </button>		
          <a href="sign up.php" class="link login__submit">
            <span class="button__text">Log Up Now</span>
            <i class="button__icon icon-chevron-left"></i>
          </a>			
        </form>
      </div>
      <div class="screen__background">
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
<body>

</body>

</html>