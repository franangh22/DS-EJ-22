<?php

    class Mascota{
        public $Id;
        public $Nombre;
        public $Raza;
        public $DuenioMascota;
        
        public function MostrarDatos(){
            echo " <-----Mascota-----> <br>";
            echo "ID: " . $this->Id . "<br>";
            echo "Nombre: " . $this->Nombre . "<br>";
            echo "Raza: " . $this->Raza . "<br>";
            echo "<hr>";
            echo " <-----Dueño Mascota-----> <br>";
            echo "ID: " . $this->DuenioMascota->Id . "<br>";
            echo "Nombre: " . $this->DuenioMascota->Nombre . "<br>";
            echo "Apellido: " . $this->DuenioMascota->Apellido . "<br>";
            echo "Documento: " . $this->DuenioMascota->Documento . "<br>";
            echo "Celular: " . $this->DuenioMascota->Celular . "<br>";
            echo "Direccion: " . $this->DuenioMascota->Direccion . "<br";
        }

    }


?>