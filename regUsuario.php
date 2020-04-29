<?php

  $usuario = $_POST["n1"];
  $contraseña = $_POST["n2"];
  
  $email = $_POST["n4"];

  
  $rol = $_POST["rol"];
  $mysqli = mysqli_connect("localhost", "root", "", "githut");
  if (mysqli_connect_errno($mysqli)) {
      echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  }

 

         
    $sql = "INSERT INTO `usuario` (`id_usuario`, `nomb_usuario`,  `email_usuario`, `fr_rol`, `contrañ_usuario`) VALUES (NULL, '$usuario', '$email', '$rol', '$contraseña');";
   
  $resultado = mysqli_query($mysqli, $sql);

  if (!$resultado) {
    echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
  }else{
    echo "Almacenado correctamente";
  }

     //cuidado con esta linea de codigo si funciona quitarle // para probrar //
  header("location:usuario.php");
  
?>

