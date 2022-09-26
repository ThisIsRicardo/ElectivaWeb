<?php

class Persona {

    public $nombre;
    public $edad;
    public $pais;


    // Método constructor
    function __construct($nombre, $edad, $pais) {
        $this -> nombre = $nombre;
        $this -> edad = $edad;
        $this -> pais = $pais;

    }


    //Funcién para mostrar información
    public function mostrarInformacion(){
        return $this -> nombre . ' tiene '. $this -> edad . ' años de edad y es de ' . $this -> pais;
    }
}

// se instancia la clase persona y le añadimos los atributos 
$ricardo = new Persona('Ricardo Alvarado', 22, 'El Salvador');
echo $ricardo -> mostrarInformacion();

echo '<br>';


$antonio = new Persona('Edgar Escobar', 25, 'El Salvador');
echo $antonio -> mostrarInformacion();



?>