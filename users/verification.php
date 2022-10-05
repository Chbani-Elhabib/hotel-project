<?php
session_start();
if(isset($_SESSION['Email'])){
?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href="../css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
      <link rel="stylesheet" href="../css/users/verification.css" />
      <link rel="stylesheet" href="../iconn/style.css"/>
      <script defer src="js/bootstrap/bootstrap.min.js"></script>
      <script defer src="../js/users/verification.js"></script>
      <title>verification</title>
    </head>
    <body>
      <div class="verification">
        <div class="container">
            <i class="icon-mail3"></i>
            <h2>VERIFY YOUR EMAIL ADDRESS</h2>
            <h3> A verification code has been sent to</h3>
            <h3> <?php echo $_SESSION['Email'] ?></h3>
            <div class="code-container">
              <input type="number" class="code" placeholder="0" min="0" max="9" required>
              <input type="number" class="code" placeholder="0" min="0" max="9" required>
              <input type="number" class="code" placeholder="0" min="0" max="9" required>
              <input type="number" class="code" placeholder="0" min="0" max="9" required>
              <input type="number" class="code" placeholder="0" min="0" max="9" required>
              <input type="number" class="code" placeholder="0" min="0" max="9" required>
            </div>
            <button type="button" class="btn btn-success">Verify</button>
            <div class="code1">
              <a>resend code</a>
              <a>resend code</a>
            </div>
        </div>
      </div>
      <div class="awda">
        <a href="">back to home page</a>
      </div>
    </body>
  </html>

<?php
}else{
  header('Location: ../sign up.php');
  exit();
}
?>

