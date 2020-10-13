<?php
require_once 'conexion.php';
require_once 'index.view.php';

 if (isset($_POST)){
  $nombre = $_POST['Nombre'];
  $turno = $_POST['hr'];
  $fh = $_POST['time'];
  
 


  $insertarDatos = "INSERT INTO xyz VALUES(null,'$fh', '$nombre','$turno')";
  $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

  if(!$ejecutarInsertar){
    echo "<h2>error en la linea de sql<br><a href='index.php'>volver</a></h2>";
  }else{

    echo "Dato guardado correctamente";
    Header('Location: index.view.php');
  }
 }

?>