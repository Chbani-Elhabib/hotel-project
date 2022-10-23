<?php
session_start();

$lag = $_SESSION["lang"];

session_unset();

$_SESSION["lang"] = $lag;

header('Location: ../../sign in.php');
exit();
