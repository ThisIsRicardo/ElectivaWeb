<?php

class Operaciones{
    

    public function llamadasInternacionales($zonaClave, $minutosHablados) {
        
        $zonaClave;
        $minutosHablados;
        $zonaAndTarifa = explode('|', $zonaClave);

                $costoTotal = $minutosHablados * $zonaAndTarifa[1];
                echo '<p class="lead text-center">Zona: ' . $zonaAndTarifa[2] . '<br> Minutos hablados: ' . $minutosHablados . 
                '<br>Total: $' . $costoTotal . '</p>';
              return ;
        }

        
    }

    // if (isset($_GET['boton'])) {
        $OperacionMetodos = new Operaciones();
        $OperacionMetodos -> llamadasInternacionales($_POST['zonaClave'], $_POST['minutosHablados']);

        // }

    


?>