<html>
    
    <head>
        <meta charset="utf-8">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/estilo2.css"/>
      <title>Proyecto</title>
    </head>
    
    <header>
    <center> <font  size=5   >Registrar Empleado </font></center>
</header>
<a href='regresar.php'><img src="imagenes/imagen2.png" width="55" height="40"></a>
    <body>
      
    
        
        <aside>
       
            
                
       
                
                
                
                <form action="regEmpleado.php" method="post"> 
              
                <br />
Digite usuario  <input type="text" name="n1" placeholder="nombre usuario" />
<br />
Digite  contraseña  <input type="text" name="n2" placeholder="contraseña"/>
<br />
Digite cedula <input type="number" name="n3"placeholder="cedula" />
<br />
Digite  email  <input type="email" name="n4" placeholder="correo"/>
<br />
Digite telefono  <input type="number" name="n5" placeholder="telefono"/>
<br />
Digite  nombre  <input type="text" name="n6" placeholder="nombre completo" />
<br />
Digite rol 
        <select name='rol'>
<?php
            include("conexionBD.php");
            $sql = "Select * from roles";
            $resultado = mysqli_query($mysqli, $sql);
            if (!$resultado) {
              echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
            }else{  
              while($fila = mysqli_fetch_assoc($resultado)){
                echo "
                  <option value='$fila[id_rol]'>$fila[descripcion]</option>
                ";
              }
            }
          ?>
        </select>
<br />
<br />
<input type="submit"  value="registrar" name="n8"/>
<br />
</form>
<br />


            
          
         </p>
         
         
        </aside>
       
       
        </body>
    
</html>
