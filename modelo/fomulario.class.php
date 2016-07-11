<?php
class Modelo{
	

function guardarFormulario($nombre, $password, $mail, $Nacionalidad, $sexo ){
	
      $enlace =  mysql_connect("localhost","root","12345678");

      if (!$enlace){

      	die('no pudo conectarse:'.mysql_error());
      }
echo 'conectado exitosamente';
mysql_close($enlace);

mysql_query("incert")

INSERT INTO table_test (nombre, password, email, nacionalidad, sexo)
VALUES ($nombre, $password, $email, $nacionalidad, $sexo) 

}






}
?>