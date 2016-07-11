<?php
$nombre=$_POST["nombre"];
$password=$_POST["password"];
$email=$_POST["email"];
$nacionalidad=$_POST["nacionalidad"];
$sexo=$_POST["sexo"];

//require_once("../../modelo/caca.php");
require_once("../../modelo/formulario.class.php");

 $obj = new Modelo();

 $obj->guardarFormulario($nombre, $password, $email, $nacionalidad, $sexo);




?>