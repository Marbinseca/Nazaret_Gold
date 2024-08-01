<?php session_start(); 
require_once 'C:/xampp/htdocs/Nazaret_Gold/vendor/autoload.php';
include './class/connection.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nazaret_Gold</title>
    <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/style.css">
    
</head>
<body>

<section class='login' id='login'>
  <div class='head'>
  <h1 class='company'>Nazaret Software</h1>
  </div>
  <p class='msg'>Bienvenido</p>
  <div class='form'>
    <form>
  <input type="text" placeholder='Username' class='text' id='username' required><br>
  <input type="password" placeholder='••••••••••••••' class='password'><br>
  <a href="./index.php" class='btn-login' id='do-login'>Ingresar</a>
    </form>
  </div>
</section>

<script  src="./public/script.js"></script>

</body>
</html>








