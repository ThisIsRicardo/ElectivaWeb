<?php
$title = "Semana 8";
include $_SERVER['DOCUMENT_ROOT']."/2022/ElectivaWeb/public/header.php";
?>


<ul class="nav nav-tabs col-8 mt-5 mx-auto rounded lead" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
            role="tab" aria-controls="home-tab-pane" aria-selected="true">Ejercicio 1</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button"
            role="tab" aria-controls="profile-tab-pane text-light" aria-selected="false">Ejercicio 2</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button"
            role="tab" aria-controls="contact-tab-pane" aria-selected="false">Ejercicio 3</button>
    </li>
</ul>
<div class="tab-content col-8 mx-auto" id="myTabContent">
    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

        <div class=" container-fluid bg-dark text-light p-5 rounded">
            <div class="container bg-dark p-2">
                <h1 class="display-6 text-center">Llamadas Internacionales</h1>
                <hr>
                <div class="col-4 mx-auto">
                    <div id="emailHelp" class="form-text text-light lead  mt-3">Ingrese los minutos hablados:</div>
                    <input type="number" class="form-control" placeholder="Ej. 5" min="1" name="minutosHablados"
                        id="minutosHablados" required>
                    <div id="emailHelp" class="form-text text-light lead  mt-3">Seleccione la zona a la que llamó:</div>
                    <select class="form-select" name="zonaClave" id="zonaClave">
                        <option disabled>Seleccione una zona</option>
                        <option value="12|2|América del Norte">América del Norte</option>
                        <option value="15|2.2|América Central">América Central</option>
                        <option value="18|4.5|América del Sur">América del Sur</option>
                        <option value="19|3.5|Europa">Europa</option>
                        <option value="23|6|Asia">Asia</option>
                        <option value="25|6|África">África</option>
                        <option value="29|5|Oceanía">Oceanía</option>
                    </select>
                    <div class="text-center">
                        <button class="btn btn-primary mt-5" onclick="resultado()" id="button">Calcular costo</button>

                    </div>
                    <br>
                    <div class="card-body" id="resultado"></div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
        <div class="container-fluid bg-dark text-light p-5 rounded">
            <div class="container bg-dark p-5">
                <h1 class="display-4 ">En construcción...</h1>
                <hr>

            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
        <div class="container-fluid bg-dark text-light p-5 rounded">
            <div class="container bg-dark p-5">
                <h1 class="display-4 ">En construcción...</h1>
                <hr>

            </div>
        </div>
    </div>


    <script type="text/javascript" src="funcion.js"></script>

    <?php include $_SERVER['DOCUMENT_ROOT']."/2022/ElectivaWeb/public/footer.php"; ?>