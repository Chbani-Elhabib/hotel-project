<?php
  $active = "signUP";
  session_start();


  if(($_SERVER["REQUEST_METHOD"] == "POST")){


      $UserName = $_POST['Username'];
      $Email = $_POST['Email'];
      $Password = password_hash($_POST['Password'], PASSWORD_DEFAULT);


      include("database/data.php");

      $sql = "INSERT INTO users (UserName , Email, Passworde)
      VALUES ('$UserName', '$Email', '$Password')";
      $con->exec($sql);

      $_SESSION['UserName'] = $UserName ;
      $_SESSION['Email'] = $Email ;
      $_SESSION['Password'] = $Password ;

      header('Location: users/verification.php');
      exit();

  };


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("head/link_css.php") ?>
    <!-- <link rel="stylesheet" href="css/sign in.css">   -->
    <link rel="stylesheet" href="css/sign up.css">  
    <!-- // css  -->
    <!-- script js -->
    <?php include("head/link_javascript.php") ?>
    <!-- jquery sign up  -->
    <script defer src="js/sign up.js"></script>
    <!-- //jquery sign up  -->
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
          <form class="login" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <h1>SIGN UP</h1>
            <div class="login__field">
              <input type="text" class="login__input" name="Username">
              <label class="labelsignup" data-value="0">Username</label>
              <span class="validation"></span>
            </div>
            <div class="login__field">
              <input type="text" class="login__input" name="Email">
              <label class="labelsignup" value="0" for="login__input">Email</label>
              <span class="validation"></span>
            </div>
            <div class="login__field">
              <input type="password" class="login__input" name="Password">
              <label class="labelsignup" for="login__input">Password</label>
              <span class="validation"></span>
              <i class="eye"></i>
            </div>
            <div class="login__field">
              <input type="password" class="login__input">
              <label class="labelsignup" for="login__input">Confirm Password</label>
              <span class="validation"></span>
            </div>
            <button class="login__submit" >
              <span class="button__text">Log Up Now</span>
              <i class="button__icon icon-chevron-right"></i>
            </button>				
            <a href="sign in.php" class="signin">
              <span class="button__text">sign in</span>
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