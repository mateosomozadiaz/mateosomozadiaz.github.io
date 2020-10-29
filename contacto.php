<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Mateo Somoza Diaz | Contacto</title>
    <meta charset="UTF-8">
    <meta name="title" content="Mateo Somoza Diaz | Contacto">
    <meta name="description" content="Página de Contacto | Mateo Somoza Diaz">
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <link  rel="icon"   href="img/favicon.png" type="image/png" />
  </head>
  <body>
   <form method="post">
     <div id="back-form">
      <img id="logo-contacto" src="img/logo.png" title="logo">
      <h3>Contáctame</h3>
      <input type="text" name="nombre" class="form" id="nombre" placeholder="Nombre">
      <input type="text" name="apellido" class="form" id="apellido" placeholder="Apellido">
      <input type="email" name="email" class="form" id="mail" placeholder="Correo Electrónico">
      <input type="text" name="pregunta" class="form" id="pregunta" placeholder="Pregunta o Argumento">
      <input id="boton" type="submit" name="enviar" value="Enviar">
      <p><a href="index.html"><u>⇄ Volver a la pagina principal</u></a></p>
     </div>
  </form>
    <p class="aclaracion">Luego de un tiempo de que ayas llenado el formulario,</p><p class="aclaracion">recibirás un correo en la bandeja de entrada de el E-mail que hayas facilitado.</p><p class="aclaracion">El mismo tendra la respuesta a tu pregunta o argumento.</p><p class="aclaracion">Apenas presione el boton, se registrará su respuesta pero no se le redirigirá a ninguna parte.</p>
<?php
include("form.php")
?>
  </body>
</html>
