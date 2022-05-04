<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ftr.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <title>CRUD PHP</title>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
</head>

<body>
    
    <header>
    <div class="img-logo">
            <img src="img/web02.png" />
            <h1> ESTUDIANTE</h1>
        </div>
        <div class="iz">
            <a href="index.php"><i class='bx bxs-exit' style='color:#ffffff' ></i></a>
            </div>
    </header>
    <?php
    // Llamar a la conexion
    include 'conexion.php';
    $link = conectarse();
    session_start();
        $codigo = $_SESSION['txtUsuario'];
        //echo "Bienvenido: ".$_SESSION['txtUsuario'];
    
    
    ?>
     <div class="container mt-4">
        <h1 class="text-center color-red">TABLA ALUMNO</h1>
        <table class="table text-white mt-3 mb-5 border-bottom">
            <thead>
                <tr>
                    <th scope="col">CODIGO ALUMNO</th>
                    <th scope="col">APELLIDO PATERNO</th>
                    <th scope="col">APELLIDO MATERNO</th>
                    <th scope="col">NOMBRES</th>
                    <th scope="col">USUARIO</th>
                    <th scope="col">CODIGO DE CARRERA</th>

                </tr>
            </thead>
            <tbody>
                <?php
                //CONEXION A UNA BBDD
                mysqli_select_db($link, 'byhuiujzlldacrbsbnwq');
                $consulta1 = "select * from talumno where CodAlumno like '$codigo'";
                

                //DESPLEGAR DATOS DE TABLA
                $resultado1 = mysqli_query($link, $consulta1)
                    or die('Error, consulta');
                while ($fila = mysqli_fetch_array($resultado1)) {
                ?>
                    <tr>
                        <td><?php echo $fila['CodAlumno'] ?></td>
                        <td><?php echo $fila['APaterno'] ?></td>
                        <td><?php echo $fila['AMaterno'] ?></td>
                        <td><?php echo $fila['Nombres'] ?></td>
                        <td><?php echo $fila['Usuario'] ?></td>
                        <td><?php echo $fila['CodCarrera'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
   
    <div class="container mt-4">
        <h1 class="text-center color-red">TABLA NOTAS</h1>
        <table class="table text-white mt-3 mb-5 border-bottom">
            <thead>
                <tr>
                    <th scope="col">CODIGO ALUMNO</th>
                    <th scope="col">CODIGO ASIGNATURA</th>
                    <th scope="col">SEMESTRE</th>
                    <th scope="col">PARCIAL I</th>
                    <th scope="col">PARCIAL II</th>
                    <th scope="col">NOTA FINAL</th>
                    <th scope="col">REGISTRO NOTA</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    //session_start();
                    //$codigo = $_SESSION['txtUsuario'];
                   

            
                //CONEXION A UNA BBDD
                mysqli_select_db($link, 'byhuiujzlldacrbsbnwq');
                
                //CONSULTAR TABLA
                $consulta1 = "select * from tnotas where CodAlumno like '$codigo'";

                //DESPLEGAR DATOS DE TABLA
                $resultado1 = mysqli_query($link, $consulta1)
                    or die('Error, consulta');
                
                while ($fila = mysqli_fetch_array($resultado1)) {
                ?>
                    <tr>
                        <td><?php echo $fila['CodAlumno'] ?></td>
                        <td><?php echo $fila['CodAsignatura'] ?></td>
                        <td><?php echo $fila['Semestre'] ?></td>
                        <td><?php echo $fila['Parcial1'] ?></td>
                        <td><?php echo $fila['Parcial2'] ?></td>
                        <td><?php echo $fila['NotaFinal'] ?></td>
                        <td><?php echo $fila['RegistroNota'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <footer>

        <div class="contFooter">
            <div class="footerInfo">
                <i class='bx bx-copyright colorICO'></i>
                <h3 class="footerDescripcion">2022 Todos los derechos reservados</h3>
            </div>
            <div class="footerInfo">
                <i class='bx bxs-briefcase colorICO'></i>
                <h3 class="footerDescripcion">Desarrollo de software II</h3>
            </div>
            <div class="footerInfo">
                <i class='bx bxs-buildings colorICO'></i>
                <h3 class="footerDescripcion">GS</h3>
            </div>
            <div class="footerInfo footerExtra">
                <i class='bx bxs-user colorICO' style='color:#ffffff'></i>
                <h3 class="footerDescripcion">Kelvin Guerra</h3>
                <h3 class="footerDescripcion">Patrik Polar</h3>
                <h3 class="footerDescripcion">Yudith Mamani</h3>
                <h3 class="footerDescripcion">Rovil Sequeiros</h3>
            </div>
        </div>
    </footer>

</body>

</html>