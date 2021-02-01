<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <style>
  form{
    border: 2px solid black;
    display: flex;
    flex-direction: column;
    width: 300px;
    background-color: rgb(200,200,200);
    padding: 10px 5px
  }
  label{
    display:flex;
    justify-content: space-between;
  }
  </style>
</head>
<body>
  <form action="validate.php" method="post" id="form">
  <label for="username">
  Username:
  <input type="text" name="username" id="username" placeholder="manolo" minlength="3">
  </label>
  <label for="email">
  Email:
  <input type="email" name="email" id="email" placeholder="manolo@.." minlength="3">
  </label>
  <label for="password">
  Email:
  <input type="password" name="password" id="password" minlength="3">
  </label>
  <input type="submit" value="Log in" id="">
  </form>
</body>
</html>

<?php
  session_start();
  if(isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['password'])){
    $url= 'panel.php';
    header('Location: ' . $url);
    exit();
  }
?>