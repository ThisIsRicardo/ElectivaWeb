<?php

class Persona {

    public $nombre;
    public $telefono;


    function __construct($nombre, $telefono) {

        $this -> nombre = $nombre;
        $this -> telefono = $telefono;

    }

    public function mostrarInformacion() {
        return 'Nombre: ' . $this -> nombre . '<br>Teléfono: ' . $this -> telefono;
    }

}

$ricardo = new Persona('Ricardo', 71541572);
echo $ricardo -> mostrarInformacion();


class Empleado extends Persona {


    function __construct($nombre, $telefono, $sueldo){
        parent::__construct($nombre, $telefono);
        $this -> sueldo = $sueldo;
    }

    public function pagarImpuestos() {

        if ($this -> sueldo > 500) {
            echo '<br> Debe pagar impuestos';
        } else {
            echo '<br> No debe pagar impuestos';
        }
    }

}

$ricardo = new Empleado('Ricardo Sykes', 71541572, 1500);
echo '<br>' . $ricardo -> mostrarInformacion() . '<br> Sueldo: ' . $ricardo -> sueldo;
echo $ricardo -> pagarImpuestos();
?>