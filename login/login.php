<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-page">
  <div class="form">
    <form class="register-form" action="../userAPI.php" method="post">
      <input id="newUser" type="text" placeholder="usuario"/>
      <input id="newPassword" type="password" placeholder="contraseña"/>
      <input id="newEmail" type="text" placeholder="email"/>
      <input type="submit" value="Crear">
      <p class="message">¿Ya estás registrado? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="../userAPI.php" method="post">
      <input id="user" type="text" placeholder="usuario"/>
      <input id="password" type="password" placeholder="contraseña"/>
      <input type="submit" value="Ingresar">
      <p class="message">¿No te has resgistrado? <a href="#">Crear una cuenta</a></p>
    </form>
  </div>
</div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="./script.js"></script>

</body>
</html>