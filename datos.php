<?php

$destino="iscangelolvera@hotmail.com";
$nombre=$_POST["nombre"];
$apellido_p=$_POST["a_pat"];
$apellido_m=$_POST["a_mat"];
$domicilio=$_POST["domicilio"];
$edad=$_POST["edad"];
$genero=$_POST["genero"];
$g_estudios=$_POST["grado"];
$carr_esp=$_POST["carr_esp"];
$con_hab=$_POST["con_hab"];
$exp=$_POST["exp"];
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];
$folio=$_POST["folio"];

$todo= "  Folio:  ".$folio."\n  Nombre de Solicitante:  ".$nombre." ".$apellido_p." ".$apellido_m."\n  Domicilio:  ".$domicilio."\n  Edad:  ".$edad." años\n  Teléfono:  ".$telefono. " \n  Genero:  ".$genero."\n  Grado de Estudios:  ".$g_estudios."\n  Carrera o Especialidad:  ".$carr_esp."\n  Conocimientos y Habilidades:  ".$con_hab."\n  Experiencia:  ".$exp."\n  Correo: ".$correo;

mail($destino,"Nuevo Registro ",$todo);
header("Location:salida.html");

?>
