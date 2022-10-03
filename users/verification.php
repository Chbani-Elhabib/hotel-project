<?php
// if(($_SERVER["REQUEST_METHOD"] == "POST")){
    $UserName = $_POST['username'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    echo $UserName;
    echo $Email;
    echo $Password;
// }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/users/verification.css" />
    <link rel="stylesheet" href="../iconn/style.css"/>
    <script src="../js/users/verification.js"></script>
    <title>verification</title>
  </head>
  <body>
        <div class="container">
            <i class="icon-mail3"></i>
            <h2>VERIFY YOUR EMAIL ADDRESS</h2>
            <h4> A verification code has been sent to</h4>
            <h4> email</h4>
            <div class="code-container">
                <input type="number" class="code" placeholder="0" min="0" max="9" required>
                <input type="number" class="code" placeholder="0" min="0" max="9" required>
                <input type="number" class="code" placeholder="0" min="0" max="9" required>
                <input type="number" class="code" placeholder="0" min="0" max="9" required>
                <input type="number" class="code" placeholder="0" min="0" max="9" required>
                <input type="number" class="code" placeholder="0" min="0" max="9" required>
            </div>
            <small class="info">
                This is design only. We didn't actually send you an email as we don't have your email, right?
            </small>
        </div>
  </body>
</html>