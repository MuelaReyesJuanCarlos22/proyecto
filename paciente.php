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
<div class="que-hacemos">
    <div class="que-hacemos-1">
        <h1>¿Qué hacemos?</h1>
        <p>El IMSS, es la institución con mayor presencia en la atención a la salud y en la protección social de los mexicanos desde su fundación en 1943, para ello, combina la investigación y la práctica médica, con la administración de los recursos para el retiro de sus asegurados, para brindar tranquilidad y estabilidad a los trabajadores y sus familias, ante cualquiera de los riesgos especificados en la Ley del Seguro Social. Hoy en día, más de la mitad de la población mexicana, tiene algo que ver con el Instituto, hasta ahora, la más grande en su género en América Latina. </p>
    </div>
    <div class="que-hacemos-imagen">
        <img src="imagen-cliente.jpg" alt="">
    </div>
    
    <div class="sacarcita">
        <h1>Saca tu cita</h1>
        <form method="POST">
            <label>Ingresa tu CURP</label>
            <input type="text" name="curpCita">
            <label>Ingresa tu NSS (Numero de seguridad social)</label>
            <input type="text" name="nssCita">
             <label>Ingresa tu correo personal</label>
             <input type="email" name="correoCita">
             <input type="submit" value="Agendar cita" name='agendar'>   
             <?php 
             if(isset($_POST['agendar'])){
                echo'<script type="text/javascript">
                alert("Tu cita ha sido agendada para la siguiente fecha 10/09/2022");
                </script>';
             }
             ?>
        </form>
    </div>
</div>
<?php include("footer.php") ?>
</body>
</html>
