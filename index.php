<?php
  session_start();
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
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION["lang"];?>">
<head>
  <?php include("head/link_css.php") ?>
  <!-- // css  -->
  <!-- script js -->
  <?php include("head/link_javascript.php") ?>
  <!-- //script js -->
</head>
  <!-- header -->
  <?php
    include("header_footer/header.php");
  ?>
  <!-- //header -->
  <h1>index</h1>

  <!-- footer -->
  <?php
    include("header_footer/footer.php");
  ?>
  <!-- //footer -->
<body>

</body>

</html>