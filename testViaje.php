<?php
include("viajes.php");
include("pasajeros.php");
include("responsableV.php");

$objViaje = new Viajes(1234, "Cancun", 20);
//$objPas = new Pasajero("Lautaro", "Mellado", "11111111", 2994675332);
//$objResp = new ResponsableV("3456", "1234", "Juan", "Perez");
echo $objViaje."\n";

//$colPasa[0] = ["nombre" => "Pepe", "apellido" => "Suarez", "dni" => "99999999"];


?>