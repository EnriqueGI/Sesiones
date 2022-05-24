<html>

<head>
    <title>

    </title>
</head>
<body>
<form action="" method="POST">
 Nombre <input type="text" name="nombre">
 <input type="submit" name="Enviar" value="Envier">

</form>

</body>
</html>
<?php
if(isset($_POST['Enviar'])){
    session_start();
    $_SESSION['nombre'] =$_POST['nombre'];

    header("location:Sesion1b.php");
}

?>