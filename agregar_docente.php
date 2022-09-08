<?php
     include "lib/conexion.php";
    // Recibe Variables
    if(isset($_POST['Guardar'])){
    $nombre=$_POST['nombres'];
    $apellido=$_POST['apellidos'];
    $cedula=$_POST['cedula'];
    $celular=$_POST['celular'];
    $contrasena=$_POST['contrasena'];
    
   $sql="INSERT INTO docente (nombre,apellido,cedula,celular,contrasena) VALUES
    ('$nombre','$apellido','$cedula','$celular','$contrasena')";

    
    $consulta=mysqli_query($conexion,$sql);

    if (!$consulta){
     die ("consulta no realizada".$conexion->error);

    } else{
        $_SESSION['mensaje']="Registro guardado";
        header ("Location:docente.php");


    }


    



    }
    
?>