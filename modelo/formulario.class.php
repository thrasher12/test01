<?php
class Modelo{
	

function guardarFormulario($nombre, $password, $email, $nacionalidad, $sexo ){
	
      $enlace =  mysql_connect("localhost","root","12345678");

      if (!$enlace){

      	die('no pudo conectarse:'.mysql_error());
      }
 mysql_select_db("test");

echo $sql = "INSERT INTO tabla_formulario (nombre, password, email, nacionalidad, sexo)
VALUES ('$nombre', '$password', '$email', '$nacionalidad', '$sexo')";

mysql_query($sql,$enlace)or die("error".mysql_error($enlace));

 mysql_close($enlace);

}






}
?>