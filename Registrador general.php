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
        background-image: url("IMGMAQUINARIAPESADA2.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
    
    <title></title>

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
       
    <article id="REGI01">
        <header class="REGI1">
        <h2 id="REGISTRO7"><strong>¡BIENVENIDO REGISTRADOR GENERAL!</strong></h2>
        </header>
    </article>
    </br>

<section>

    <table class="table7" style="width: 300px;">
<form action="#" name="registradorgeneral" method="POST">
    <tr>
        <th bgcolor="white"><label for="Documento"><h4>Ingrese su No de Documento:</h4></label>
            <input type="number" id="Documento" name="ingresesudocumentogeneral2" placeholder="Documento"/>
        </th>
    </tr>
</br>
    <tr>
        <th bgcolor="white"><label for="Contraseña"><h4>Ingrese su Contraseña:</h4></label>
            <input type="password" id="password" name="ingresesucontraseñageneral2" placeholder="Contraseña"/>
        </th>

    
            
    
   
    </table>
    </br>
    <button input type="submit" name="registrarsegeneral02">¡Listo!</button>

    </form>

    
</br>
    </br>

<button type="button" id="sesion15"><strong>¿Olvidó su Contraseña?</strong></button>

</br>
</br>

    <a href="Ingresoregistrador general.html"><button id="sesion16"><h3>ACCEDER</h3></button></a>


</section>

</html>
</body>


<?php

if(isset($_POST["registrarsegeneral02"])) {

    $ingresesudocumentogeneral2 = $_POST     ["ingresesudocumentogeneral2"];
    $ingresesucontraseñageneral2 = $_POST    ["ingresesucontraseñageneral2"];
    
   
    $insertarDatos = "INSERT INTO iniciosdesesionregistradoresgenerales VALUES('$ingresesudocumentogeneral2', '$ingresesucontraseñageneral2', '')";
    


    $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);

}

?>