<div class = "barra">
    <p>Hola <?php echo $nombre ?></p> <!--Figura nuestro nombre de usuario-->
    <a href = "/logout" class = "boton">Cerrar sesion</a>
</div>

<?php if(isset($_SESSION['admin'])) { ?>
    <div class="barra-servicios">
        <a class = "boton" href="/admin">Ver Citas</a>
        <a class = "boton" href="/servicios">Ver servicio</a>
        <a class = "boton" id = "3" href="/servicios/crear">Nuevo Servicio</a>
    </div>
<?php } ?>