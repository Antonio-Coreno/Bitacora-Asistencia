<?php
      
     $servidor="localhost";
     $usuario="root";
     $clave="Cyan8502";
     $bd="empleadosxyz";
     $enlace = mysqli_connect($servidor, $usuario, $clave, $bd);
     if(!$enlace){
     	echo "error en la conexion<br><a href='index.php'>volver</a>";
     }
?>     

