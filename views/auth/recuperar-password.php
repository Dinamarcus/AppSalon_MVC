<h1 class = "nombre-pagina">Recuperar Password</h1>
<p class = "descripcion-pagina">Coloca tu nuevo password a continuacion</p>

<?php include_once __DIR__ . "/../templates/alertas.php"; ?>

<?php if ($error) return; ?>

<form class = "formulario" method="POST"> <!--No lleva el atributo action ya que eliminaria el token de la url, por lo tanto envia el formulario a la misma url/ endpoint que-->
    <div class = "campo">
        <label for = "Password">Password</label>
        <input type = "password" id = "password" name = "password">
    </div>

    <input type = "submit" class = "boton" value = "Guardar nuevo password">
</form> 

<div class="acciones">
    <a href="/">¿Ya tiene cuenta? Iniciar Sesion</a>
    <a href="/crear-cuenta">¿Aun no tienes cuenta? Crea una</a>
</div>