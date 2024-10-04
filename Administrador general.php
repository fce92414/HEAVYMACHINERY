<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRADOR GENERAL</title>
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
        <article id="ADMINISTRADORDO">
            <header class="ADMINISTRADOR0002">
        <h1 id="ADMINISTRADOR2"><strong>¡BIENVENIDO ADMINISTRADOR GENERAL!</strong></h1>
        </header>
        </article>
        
    </br>

<section>

    <table class="table9" style="width: 300px;">
<form action="#" name="administradorgeneral" method="POST">
    <tr>
        <th bgcolor="white"><label for="Documento"><h4>Ingrese su No de Documento:</h4></label>
            <input type="number" id="Documento" name="ingresesudocumentoadministradorgeneral" required placeholder="Documento"/>
        </th>
    </tr>
</br>
    <tr>
        <th bgcolor="white"><label for="Contraseña"><h4>Ingrese su Contraseña:</h4></label>
            <input type="password" id="password" name="ingresesucontraseñaadministradorgeneral" required placeholder="Contraseña"/>
        </th>
<tr>
</br>


</table>
<button input id="sesion119" type="submit"  name="administradorge2" required>¡Listo!</button>
            
    </form>
 
    
</br>

</br>
</br>

    <a href="Ingresoadministrador general.html"><button id="sesion20"><h3>ACCEDER</h3></button></a>

</section>

</html>
</body>

<?php

if(isset($_POST["administradorge2"])) {

    $ingresesudocumentoadministradorgeneral = $_POST     ["ingresesudocumentoadministradorgeneral"];
    $ingresesucontraseñaadministradorgeneral = $_POST    ["ingresesucontraseñaadministradorgeneral"];
    
   
    $insertarDatos = "INSERT INTO iniciosdesesionadministradorgeneral VALUES('$ingresesudocumentoadministradorgeneral', '$ingresesucontraseñaadministradorgeneral', '')";
    


    $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);

}

?>