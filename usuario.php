<?php

   $user = $_GET['user'];

   $password = $_GET['password'];


   if (($user == "usuario") AND ($password == "12345")){

      header('Location: index.html');

   }

   Else{

      echo "¡Usuario o contraseña incorrectos!";

      echo '<a href="'.$_SERVER['HTTP_REFERER'].'"><br>Volver</a>';

   }

?>