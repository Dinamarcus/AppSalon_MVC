<h1 class = "nombre-pagina">Nuevo Servicio</h1>
<p class = "descripcion-pagina">Llena todos los campos para añadir un servicio</p>

<?php
    // include_once __DIR__ . '/../templates/barra.php';
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form action="/servicios/crear" method = "POST" class="formulario ">
    <?php include_once __DIR__ . '/formulario.php'; ?>
    <div class = "acciones" id = "cont">
    <input type = "submit" value = "Guardar Servicio" class = "boton">
    </div>
</form>

<?php 
    $script = "
    <script src = '/build/js/app2.js'></script>
    ";
?>
