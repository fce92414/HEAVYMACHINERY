<?php

$server = "localhost";
$user = "root";
$pass = "";
$baseDeDatos = "datosinicioprogramasoftware";

$enlace = mysqli_connect ($server, $user, $pass, $baseDeDatos);

?> 



<link rel="stylesheet" href="style.css">


<html>
    <head>
        <title>
            Formulario Ingreso
        </title>
    </head>
</html>

<center>

<html>
    <h1>BIENVENIDO</h1>
</html>

</center>


<center>
</br>
<body>

 <form action="#" name="formulario" method="POST">

 
<h2>NOMBRES Y APELLIDOS:</h2><input type="text" name="nombre" placeholder="nombresyapellidos">
<h2>NO TIP DOC ASIGNADO</h2><input type="number" name="NoDocasignado" placeholder="No Documento Asignado">
<h2>NO DOCUMENTO:</h2><input type="number" name="nodocumento" placeholder="No Documento">
<h2>CORREO ELECTRÓNICO:</h2><input type="gmail" name="correo" placeholder="correo">
<h2>CONTRASEÑA NUEVA:</h2><input type="password" name="contraseña" placeholder="Contraseña">
<h2>CONFIRMAR CONTRASEÑA NUEVA</h2><input type="password" name="confirmarcontraseña" placeholder="Confirmar contraseña">



 

 <input type="submit" name="registrarse">
 
 <input type="reset">

</center>

</form>
</body>


<?php

if(isset($_POST["registrarse"])) {

    $nombre = $_POST ["nombre"];
    $CC = $_POST ["NoDocasignado"];
    $nodocumentos = $_POST ["nodocumento"];
    $correos= $_POST ["correo"];
    $contraseñas = $_POST ["contraseña"];
    $confirmarcontraseñas = $_POST ["confirmarcontraseña"];

    
   
    
    
    $insertarDatos = "INSERT INTO registrosdesoftware VALUES ('$nombre', '$CC', '$nodocumentos', '$correos', '$contraseñas', '$confirmarcontraseñas')";
    


    $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);

}

?>