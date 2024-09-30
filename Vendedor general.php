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
        <article id="VENDEDORDO">
            <header class="VENDE1">
        <h2 id="VENDEDOR2"><strong>¡BIENVENIDO VENDEDOR GENERAL!</strong></h2>
            </header>
        </article>
    </br>

<section>

    <table class="table5" bgcolor="black" style="width: 300px;">
<form action="#" name="vendedor2" method="POST">
    <tr>
        <th bgcolor="white"><label for="Documento"><h4>Ingrese su No de Documento:</h4></label>
            <input type="number" id="Documento" name="ingresesudocumentogeneral" placeholder="Documento"/>
        </th>
    </tr>
</br>
    <tr>
        <th bgcolor="white"><label for="Contraseña"><h4>Ingrese su Contraseña:</h4></label>
            <input type="password" id="password" name="ingresesucontraseñageneral" placeholder="Contraseña"/>
        </th>
    


        
    </table>
    </br>
    <button input type="submit" name="registrarsegeneral">¡Listo!</button>
        </br>
               
    </form>

    
</br>

<button type="button" id="sesion13"><strong>¿Olvidó su Contraseña?</strong></button>

</br>
</br>
    <a href="Ingresovendedor general.html"><button id="sesion14"><h3>ACCEDER</h3></button></a>

    

</section>


    
</html>
</body>

<?php

if(isset($_POST["registrarsegeneral"])) {

    $ingresesudocumentogeneral = $_POST     ["ingresesudocumentogeneral"];
    $ingresesucontraseñageneral = $_POST    ["ingresesucontraseñageneral"];
    
   
    $insertarDatos = "INSERT INTO iniciosdesesionvendedoresgenerales VALUES('$ingresesudocumentogeneral', '$ingresesucontraseñageneral', '')";
    


    $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);

}

?>