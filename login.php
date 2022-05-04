<?php
    $usuario = $_POST['txtUsuario'];
    $pass = $_POST['txtPass'];
    $count = strlen($usuario);

    session_start();
    $_SESSION['txtUsuario'] = $usuario;

    $conexion = mysqli_connect("byhuiujzlldacrbsbnwq-mysql.services.clever-cloud.com","uwgwcxm319irqaeo","R6EaEAgCOcemufi5DzNi","byhuiujzlldacrbsbnwq");

    $consulta = "SELECT * FROM tusuario where Usuario = '$usuario' and Contraseña ='$pass'";
    $resultado = mysqli_query($conexion,$consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas){
        if($count == 10){
            header("location:alumnos.php");
        }
        elseif($count < 10){
            header("location:docente.php");
        }
        else{
            
        }
    }
    else{
        ?>
        <?php
        include("index.php");
        ?>
        <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
        <?php
    }

    function codigo()
    {

        return $usuario;
        
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);