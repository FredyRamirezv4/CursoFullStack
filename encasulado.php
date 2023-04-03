<?php

require("index.php");

 
$persona = new humano();
$persona->identificarse();
$persona->caminar();

class Nino extends Humano{
    public $escuela;
    public $idioma;

    public function ingresoAClase(){
        echo "mi ingreso a clase es a las 6:00 am <br>";
    }
}

$nino = new nino();

$nino->caminar();
$nino->ingresoAClase();

class Adulto extends Humano{
     public     $trabajo;
     private    $universidad="UAN";
     private    $colorCabello;
     public     $estatura;


    public function mostrarCaracteristicas(){
        echo "<br>".$this->colorCabello."<br>";
        echo "<br>".$this->estatura."<br>";

    }

    public function irAlTrabajo(){
        echo " Mi ingreso a trabajar es a las 8:00 am <br> ";
    
    }
     public function AccederUniversidad(){
      echo " universidad".$this->universidad;
     }

     public function ingresarUniversidad($universidad){

        $this->universidad=$universidad;

     }

      function __construct($hairColor, $tall)
     {

        echo "<br>ejecuta constructor <br>";
            $this->colorCabello=$hairColor;
            $this->estatura=$tall;

     }




}

$persona2 = new Adulto("negro","1.67 mts");
// $persona2->irAlTrabajo();
// $persona2->identificarse();
// $persona2->AccederUniversidad();
// $persona2->ingresarUniversidad("Nacional");
// $persona2->AccederUniversidad();
$persona2->mostrarCaracteristicas();








?>