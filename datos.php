<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO AL PROGRAMA</title>
</head>
<body>
    
</body>
</html>

<?php

$server = "localhost";
$user = "root";
$pass = "";
$baseDeDatos = "datosinicioprogramasoftware";

$enlace = mysqli_connect ($server, $user, $pass, $baseDeDatos);

?> 

<style>

    table, th, td {
            border: 1px solid black;
        }
    </style>

<link rel="stylesheet" href="index.html">
<link rel="stylesheet" href="doccss.css">









<body>
</head>
<style type="text/css">
    body{
        background-image: url("imageinterfaz01.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>



<title></title>
    <center>
    <article id="REG1">
    <header class="REG01">
    </tr>
    <h1 id="REG2">HEAVY MACHINERY</h1>
    </article>
    </header>
    
    </center>
    <style type="text/css">
        h2{
            color:darkorange;
        }
    </style>
    </br>
    



<link rel="stylesheet" href="doccss.css">


<html>
    <head>
        <title>
            Formulario Ingreso
        </title>
    </head>
</html>

<center>
<article id="REG11">
<header class="REG13">
</tr>
<p><h2 id="REG12">REGISTRO USUARIO NUEVO:</h2></p>
</header>
</article>
</center>


<center>
</br>
<body>




<form action="#" name="ejemplo" method="POST">
<form action="Ingreso.html" name="ejemplo" method="POST">
 
 



 <table class="tabla1" style="width: 370px height: 500px;" >

 <td bgcolor="aqua"><h3><center>INGRESE LOS SIGUIENTES DATOS:</center></h3></td>
  



    <tr>
    <th bgcolor="white">
 <h3>NOMBRES Y APELLIDOS:</h3><input type="text" name="nombre" required placeholder="nombresyapellidos">
    </th>
    </tr>

    <tr>
    <th bgcolor="white">
<h3>No DE DOCUMENTO ASIGNADO:</h3><input type="number" name="nodocasignado" required placeholder="No Documento Asignado">
    </th>
    </tr>

    <tr>
    <th bgcolor="white">
<h3>NO DOCUMENTO:</h3><input type="number" name="nodocumento" required placeholder="No Documento">
    </th>
    </tr>

    <tr>
    <th bgcolor="white">
<h3>CORREO ELECTRÓNICO:</h3><input type="email" name="correo" required placeholder="correo">
    </th>
    </tr>

    <tr>
    <th bgcolor="white">
<h3>CONTRASEÑA NUEVA:</h3><input type="password" name="contraseña" required minlength="5" placeholder="contraseña">
    </th>
    </tr>

    <tr>
    <th bgcolor="white">
<h3>CONFIRMAR CONTRASEÑA NUEVA:</h3><input type="password" name="confirmarcontraseña" required placeholder="Confirmar contraseña">
    </th>
    </tr>




    </table>
    </br>

 <button  popovertarget="popover1" input id="SESION04" type="submit" name="registrarse" required>REGISTRARSE</button>


 


 <button input id="SESION03" type="reset" required>ACTUALIZAR REGISTRO</button>

 
   
</center>






</form>



<html>
<div>
    <body>
<center>
<button popovertarget="popover1">TERMINÉ EL REGISTRO</button>
 <div id="popover1" popover>
   <h1><strong> ¡DATOS REGISTRADOS!</strong></h1></br>
   Ahora podrá acceder al programa y seleccionar su rol asignado.
    </body>
</div>
</html>

<a href="Terminal de registro.html" target="_blank"><button type="submit">INGRESO</button>
    </center>
    </div>

    </br>







</body>


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