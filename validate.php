<?php
$user="admin";
$userEmail="admin@admin.com";
$userPass="admin";
session_start();

if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  if($username == $user && $userEmail == $email && $userPass == $password){
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $url= 'panel.php';
    header('Location: ' . $url);
  }else{
    $message = "You must $user with this email $userEmail and this password $userPass";
    $url= 'index.php';
    /* echo "<script>
    alert('$message');
    window.location= '$url'
    </script>"; */
    echo "<script>
    alert('$message');
    </script>";
    header("Refresh: 0.5; URL=$url");
  }
  exit();
  }
?>