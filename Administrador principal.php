<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRADOR PRINCIPAL</title>
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




<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
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
    <style type="text/css">
        h1{
            color: yellow;
        }
    </style>
    <center>
    </tr>
    <p><h1>HEAVY MACHINERY</h1></p>
    </center>
    <style type="text/css">
        h2{
            color:darkorange;
        }
    </style>


    <center>
        <article id="ADMINISTRADORP">
            <header class="ADMINISTRADOR0001">
        <h2 id="ADMINISTRADOR1"><strong>¡BIENVENIDO ADMINISTRADOR PRINCIPAL!</strong></h2>
            </header>
        </article>
    </br>

<section>

    <table class="table8" style="width: 300px;">
<form action="#" name="administradorprincipal" method="POST">
    <tr>
        <th bgcolor="white"><label for="Documento"><h4>Ingrese su No de Documento:</h4></label>
            <input type="number" id="Documento" name="ingresesudocumentoadministrador" required placeholder="Documento"/>
        </th>
    </tr>
</br>
    <tr>
        <th bgcolor="white"><label for="Contraseña"><h4>Ingrese su Contraseña:</h4></label>
            <input type="password" id="password" name="ingresesucontraseñaadministrador" required placeholder="Contraseña"/>
        </th>
    <tr>
    </br>
   

    
   
           
   
    </table>
    <button input id="sesion118" type="submit"  name="administradorpri1" required>¡Listo!</button>

    </form>
    
</br>


    </br>
<button type="button" id="sesion17"><strong>¿Olvidó su Contraseña?</strong></button>

</br>
</br>

    <a href="Ingresoadministrador principal.html"><button id="sesion18"><h3>ACCEDER</h3></button></a>

</section>

</html>
</body>

<?php

if(isset($_POST["administradorpri1"])) {

    $ingresesudocumentoadministrador = $_POST     ["ingresesudocumentoadministrador"];
    $ingresesucontraseñaadministrador = $_POST    ["ingresesucontraseñaadministrador"];
    
   
    $insertarDatos = "INSERT INTO iniciosdesesionadministradorprincipal VALUES('$ingresesudocumentoadministrador', '$ingresesucontraseñaadministrador', '')";
    


    $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);

}

?>