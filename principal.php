<?php



          

          $usuario = $_POST["usuario"];
          $clave = $_POST["cont"];
          
          $mysqli = mysqli_connect("localhost", "root", "", "githut");
          if (mysqli_connect_errno($mysqli)) {
              echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
          }
          $sql = "Select * from usuario where nomb_usuario ='$usuario' and contrañ_usuario ='$clave'";
          $resultado = mysqli_query($mysqli, $sql);
          if (!$resultado) {
            echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
            header("location:index.php");
          }else{  

           

            echo "bienvenido ";
          }
?>
<html>
   <a href='index.php'>regresar</a>
   </html>