<?php

class Obra {

    public $titulo;
    public $autor;

    function __construct($titulo, $autor) {

        $this -> titulo = $titulo;
        $this -> autor = $autor;
    }

    public function datosObra() {
        return $this -> titulo . '<br>' . $this -> autor;
    }

}

class Libro extends Obra {

    function __construct($titulo, $autor, $numeroDPaginas) {
        parent::__construct($titulo, $autor);
        $this -> numeroDPaginas = $numeroDPaginas;
    }


}

$obra1 = new Obra('El principito', 'Antoine de Saint-Exupéry');
echo $obra1 -> datosObra();

$libro1 = new Libro('El principito', 'Antoine de Saint-Exupéry', 96);
echo '<br>' . $libro1 -> datosObra() . '<br> Número de páginas: ' . $libro1 -> numeroDPaginas;

class Cuadro extends Obra {

    function __construct($titulo, $autor, $largo, $ancho) {
        parent::__construct($titulo, $autor);
        $this -> largo = $largo;
        $this -> ancho = $ancho;
    }
}

$cuadro1 = new Cuadro('Davinci', 'Leonard Davinci', 160, 90);
echo '<br>' . $cuadro1 -> datosObra() . '<br> Largo: ' . $cuadro1 -> largo . '<br> Ancho: ' . $cuadro1 -> ancho;
?>