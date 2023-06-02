<?php

    require_once "modelo/mascota.php";
    require_once "modelo/DuenioMascota.php";

     //Instanciar clase DuenioMascota
     $Duenio = new DuenioMascota();
     $Duenio -> Id = 1;
     $Duenio -> Nombre = "Franco";
     $Duenio -> Apellido = "Anghilante";
     $Duenio -> Documento = "xxxxxxxx";
     $Duenio -> Celular = "+54xxxxxxxx";
     $Duenio -> Direccion = "xx xx xx";

    //Instanciar clase Mascota
    $Masc = new Mascota();
    $Masc -> Id = 5;
    $Masc -> Nombre = "Milaneso";
    $Masc -> Raza = "Gato/Bombay";
    $Masc -> DuenioMascota = $Duenio;
    $Masc -> MostrarDatos();
?>