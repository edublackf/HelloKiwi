<?php
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['correo']) && !empty($_POST['correo']) && isset($_POST['contraseña']) && !empty($_POST['contraseña']))
{
  $server  =  ' localhost' ;
  $username  =  ' root ' ;
  $contraseña  =  ' ' ;
  $database  =  ' phplogin ' ;
  $enlace=mysql_connect($server,$username,$contraseña,$database) or die("No se conectó a la BD");
  mysql_select_bd($proyecto,$enlace) or die ("No se puede seleccionar la BD");

  mysql_query("INSERT INTO users VALUES('$nombre', '$correo', '$contraseña')");
  echo"Datos enviados correctamente";
}else{
  echo"Error al enviar los datos";
}
?>