<?php

class Persona {

    public $nombre;
    public $edad;
    public $pais;
    public $carrera;


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


class Estudiante extends Persona {

    // Método constructor
    function __construct($nombre, $edad, $pais, $carrera) {
        //Sobreescribiendo el método constructor
        parent::__construct($nombre, $edad, $pais); 
        $this -> carrera = $carrera;

    }


    //Funcién para mostrar información
    public function mostrarInformacion(){
        return $this -> nombre . ' tiene '. $this -> edad . ' años de edad y es de ' . $this -> pais;
    }
}

// se instancia la clase estudiante y le añadimos los atributos 
$ricardo = new Estudiante('Ricardo Alvarado', 22, 'El Salvador', 'Developer');
echo '<br>' . $ricardo -> carrera . '<br>';
echo $ricardo -> mostrarInformacion();


class Trabajador extends Persona {

    function __construct($nombre, $edad, $pais, $trabajo) {

        parent::__construct($nombre, $edad, $pais);
        $this -> trabajo = $trabajo;
    }
}

$ricardo = new Trabajador('Ricardo Alvarado', 22, 'El Salvador', 'Profesor');
echo '<br>' . $ricardo -> trabajo . '<br>';

?>