<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Paciente</title>
</head>
<body style="background-color: rgba(89,213, 120, 0.4)">
<?php include("cabecera.php") ?>

<div class="empleados">
    <img src="imagen-empleado.jpg" alt="">
    <form action="" method="POST">
        <h1>Inicia sesión   </h1>
        <label for="">Ingresa tu numero de empleado</label>
        <input type="text" name="numeroEmpleado" id="">
        <label for="">Ingresa tu contraseña</label>
        <input type="password" name="contraEmpleado" id="">
        <input type="submit" value="Entrar" name='botonentrar'>
        <?php 
        if(isset($_POST['botonentrar'])){
            echo "<script>alert('Bienvenido de nuevo usuario')</script>";
        }
        ?>
    </form>
</div>
<?php include ("footer.php") ?>
</body>
</html>

