<?php
$title = 'Acerca de mí';
include $_SERVER['DOCUMENT_ROOT']."/2022/ElectivaWeb/public/header.php";
?>

<div class="mt-5 col-5 container-fluid bg-primary text-light p-5 rounded">
    <div class="container bg-primary p-5">
        <h1 class="display-5 text-center">Acerca de mí</h1>
        <br>
        <img src="../public/img/Photo.PNG" class="rounded mx-auto d-block" alt="Foto personal">
        <hr>

        <p class="lead text-center">Mi nombre es Ricardo, y soy un estudiante de 4to año de Ingeniería en Ciencias de la
            Computación, actualmente estoy
            desarrollando este portafolio para mejorar mis habilidades como desarrollador web, además de también
            practicar la POO y muy pronto
            también aprender del patrón de diseño Modelo-Vista-Controlador (MVC).
        </p>
        <hr>
        <h6 class="display-6 text-center">Redes Sociales</h6>
        <br>
        <div class="text-center">
            <a href="https://www.linkedin.com/in/thisisricardoo/"><img src="../public/img/linkedin_logo.png"
                    class="rounded" alt="Linkedin Logo" width="40" height="40"></a>
            <a href="https://www.instagram.com/ricardo.alvxd/"><img src="../public/img/instagram.png" class="rounded"
                    alt="Instagram Logo" width="40" height="40"></a>
            <a href="https://www.facebook.com/ricaardo.r00/"><img src="../public/img/facebook.png" class="rounded"
                    alt="Facebook Logo" width="40" height="40"></a>
        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/2022/ElectivaWeb/public/footer.php"; ?>