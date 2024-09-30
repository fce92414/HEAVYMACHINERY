<?php

$server = "localhost";
$user = "root";
$pass = "";
$baseDeDatos = "datosinicioprogramasoftware";

$enlace = mysqli_connect ($server, $user, $pass, $baseDeDatos);

?> 


<?php

if(isset($_POST["registrarse"])) {

    $nombre = $_POST        ["nombre"];
    $nodocasignado = $_POST ["nodocasignado"];
    $nodocumento = $_POST ["nodocumento"];
    $correo = $_POST       ["correo"];
    $contraseña = $_POST    ["contraseña"];
    $confirmarcontraseña = $_POST ["confirmarcontraseña"];
   
   
    
    
    $insertarDatos = "INSERT INTO registrosdesoftware VALUES('$nombre', '$nodocasignado', '$nodocumento', '$correo', '$contraseña', '$confirmarcontraseña', '')";
    


    $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);

}

?>