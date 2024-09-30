<html>

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
        background-image: url("IMGMAQUINARIAPESADA2.jpg");
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
 <h3>NOMBRES Y APELLIDOS:</h3><input type="text" name="nombre" placeholder="nombresyapellidos">
    </th>
    </tr>

    <tr>
    <th bgcolor="white">
<h3>No DE DOCUMENTO ASIGNADO:</h3><input type="number" name="nodocasignado" placeholder="No Documento Asignado">
    </th>
    </tr>

    <tr>
    <th bgcolor="white">
<h3>NO DOCUMENTO:</h3><input type="number" name="nodocumento" placeholder="No Documento">
    </th>
    </tr>

    <tr>
    <th bgcolor="white">
<h3>CORREO ELECTRÓNICO:</h3><input type="gmail" name="correo" placeholder="correo">
    </th>
    </tr>

    <tr>
    <th bgcolor="white">
<h3>CONTRASEÑA NUEVA:</h3><input type="password" name="contraseña" placeholder="contraseña">
    </th>
    </tr>

    <tr>
    <th bgcolor="white">
<h3>CONFIRMAR CONTRASEÑA NUEVA:</h3><input type="password" name="confirmarcontraseña" placeholder="Confirmar contraseña">
    </th>
    </tr>




    </table>
    </br>


 <button input id="SESION04" type="submit" name="registrarse">REGISTRARSE</button>

 <button input id="SESION03" type="reset">ACTUALIZAR REGISTRO</button>

 
   
</center>

</form>



<center>
<a href="Ingreso.html" target="_blank"><button id="SESION62"><strong>INGRESAR AL PROGRAMA</strong></button></a>
</center>


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