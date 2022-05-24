<?php
session_start();
if(isset($_SESSION['nombre'])){
    echo "El nombre del usuario es: ".$_SESSION['nombre'];
}else{
    header('location:Sesion1a.php');
}
echo "<form action='' method='POST'>
<input type='submit' name='Salir' value='Salir'>
</form>";

if(isset($_POST['Salir'])){
    session_destroy();
    header('location:Sesion1a.php');
}

?>