<?php
  session_start();
  if(!isset($_SESSION['username']) || !isset($_SESSION['email'])){
    $url= 'index.php';
    header('Location: ' . $url);
    exit();
  }
  $username= $_SESSION['username'];
  $email = $_SESSION['email'];
  $password = $_SESSION['password'];
  echo "<h1>Wellcome $username </h1>";
  echo "<p>You are logged with this email: $email</p>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel</title>
</head>
<body>
  <form action="close_session.php" method="post">
  <input type="submit" value="Log out">
  </form>
</body>
</html>