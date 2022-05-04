<?php
    $host = 'byhuiujzlldacrbsbnwq-mysql.services.clever-cloud.com';
    $puerto = 3306;
    $usuario = 'uwgwcxm319irqaeo';
    $contrasena = 'R6EaEAgCOcemufi5DzNi';
    $basedatos = 'byhuiujzlldacrbsbnwq';

    function conectarse()
    {
        global $host, $puerto, $usuario, $contrasena, $basedatos;
        // Conectarse al servidor MySQL
        if(!($link = mysqli_connect($host,$usuario,$contrasena)))
        {
            echo 'Error al conectarse al servidor de base de datos';
            exit();
        }
        else echo "Conexion satisfactoria con el servidor MySQL ";
        // Conexion con la base de datos
        if(!mysqli_select_db($link, $basedatos))
        {
            echo 'Error al establecer conexion con la base de datos';
            exit();
        }
        else echo 'Se extablecion conexion con la base de datos';
        return $link;
    }
?>