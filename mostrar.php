<h1>Datos recibidos</h1>
<?php 
echo "Recibdo:<br>";



/*var_dump($_POST); //trae los datos de la array encriptado , no ay limite de extencion, trea solo el name , no se puede guardar en historial 
echo"<br>";*/

/*var_dump($_GET);// trae los datos de la arrar no ecriptado , no t podes estender de 2048 caracteres , trae solo en mane, si se puede guardar en historial
echo"<br>";*/

$nombre = $_POST['usuario'];// trea el usuario del html y lo guarda en un variable php

echo $nombre;

if($nombre == "admin" && $_POST['password']== "1234")
{
		include_once"bienvenida.html";// llama al html
}
else
{
		include_once"NoLogeado.html";
}



 ?>