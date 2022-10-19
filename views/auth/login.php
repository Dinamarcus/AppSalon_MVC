<h1 class = "nombre-pagina">LOGIN</h1>
<p class = "descripcion-pagina">Inicia sesion con tus datos</p>

<?php include_once __DIR__ . "/../templates/alertas.php"; ?>

<form class = "formulario-login" method="POST" action="/">
    <div class = "campo">
        <label for = "email"> Email </label>
        <input type = "email" id = "email" placeholder="Tu email" name = "email"> <!--El atributo name nos permite leerlo como un elemento del array POST-->
    </div>

    <div class = "campo">
        <label for = "password">Password</label>
        <input type = "password" id = "password" placeholder="Tu password" name = "password">
    </div>

    <input type="submit" class = "boton iniciar-sesion" value="Iniciar Sesion">
</form>

<div class = "acciones">
    <a href = "/crear-cuenta">¿Aun no tienes una cuenta? Crear una</a>
    <a href = "/olvide">¿Olvidaste tu password?</a>
</div>