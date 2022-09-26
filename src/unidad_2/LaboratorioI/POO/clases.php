<?php

class Persona {

    public $nombre;
    public $edad;
    public $pais;
}

$ricardo = new Persona;
$ricardo -> nombre = 'Ricardo Alvarado';
$ricardo -> edad = 22;
$ricardo -> pais = 'El Salvador';


$antonio = new Persona;
$antonio -> nombre = 'Antonio';
$antonio -> edad = 29;
$antonio -> pais = 'Francia';

echo $ricardo -> nombre, ' tiene ', $ricardo -> edad, ' años de edad ', '<br>';

?>