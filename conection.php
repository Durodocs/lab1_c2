<?php

$conexion = mysqli_connect( "localhost","root",
"","store");

if(mysqli_connect_errno()){
    echo "Error al conectar a la base de datos" . mysqli_connect_error();
    
}else{
   # echo "Conexión realizada correctamente";
}

?>