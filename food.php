<?php
  session_start();
  $active = "food";
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
  <!-- ======jpuery fouther====== -->
  <script defer src="js/header_footer/footer.js"></script>
  <!-- //script js -->
</head>
  <!-- header -->
  <?php
    include("header_footer/header.php");
  ?>
  <!-- //header -->
  <h1>food</h1>

  <!-- footer -->
  <?php
    include("header_footer/footer.php");
  ?>
  <!-- //footer -->
<body>

</body>

</html>