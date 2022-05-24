<?php
session_start();
if(isset($_SESSION['nombre'])){
    echo "El nombre del usuario es: ".$_SESSION['nombre'];
    echo "<a href='./Sesion1c.php'>Página siguiente</a>";
}else{
    header('location:Sesion1a.php');
}


?>