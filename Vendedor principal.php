<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VENDEDOR PRINCIPAL</title>
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
    <p><h1><strong>HEAVY MACHINERY</strong></h1></p>
    </center>

    <style type="text/css">
        h2{
            color:darkorange;
        }
    </style>
    <center>
        <article id="VENDEDORP">
            <header class="VENDEDORP0001">
        <h2><strong>¡BIENVENIDO VENDEDOR PRINCIPAL!</strong></h2>
            </header>
        </article>
    </br>





<section>

    <form action="#" name="vendedor1" method="POST">
    <table class="table3" bgcolor="black" style="width: 300px;">
   

    <tr>
    <th bgcolor="white"><label for="Documento"><h4>Ingrese su No de Documento:</h4></label>
    <input type="number" id="Documento" name="ingresesudocumento" required placeholder="Documento"/>
    </th>
    </tr>

</br>

    <tr>
    <th bgcolor="white"><label for="Contraseña"><h4>Ingrese su Contraseña:</h4></label>
    <input type="password" id="password" name="ingresesucontraseña" required placeholder="Contraseña"/>
    </th>

    
    
    


    </table>

    <button input id="sesion115" type="submit"  name="registrarse" required>¡Listo!</button>
    </form>

    
    

    
    
</br>

<center>
    <tr>
    <button type="button" id="sesion12"><strong>¿Olvidó su Contraseña?</strong></button>
</center>


</br>
    <a href="Ingresovendedor principal.html"><button id="sesion11"><h3>ACCEDER</h3></button></a>


   
</section>
    
</br>

    

    
</html>
</body>

<?php

if(isset($_POST["registrarse"])) {

    $ingresesudocumento = $_POST     ["ingresesudocumento"];
    $ingresesucontraseña = $_POST    ["ingresesucontraseña"];
    
   
    $insertarDatos = "INSERT INTO iniciosdesesionvendedoresprincipales VALUES('$ingresesudocumento', '$ingresesucontraseña', '')";
    


    $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);

}

?>