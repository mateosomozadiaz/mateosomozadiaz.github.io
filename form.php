<?php

include("con_db.php");



if (isset($_POST['enviar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['email']) < 1 && strlen($_POST['pregunta']) < 1) {
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $email = $_POST['email'];
      $email = $_POST['pregunta'];
      $consulta = "INSERT INTO datos(Nombre, Apellido,Correo Electrónico, Pregunta o Argumento) VALUES ('$nombre','$apellido','$email','$pregunta')";
      $resultado = mysqli_query($conect,$consulta);
      if ($resultado) {
          ?>
          <h3 class="si">¡Bien! Pronto recibirás un correo en la bandeja de entrada del email que has facilitado con la respuesta a tu pregunta o argumento.</h3>
          <?php
      } else {
           ?>
          <h3 class="no">Ups... Ha ocurrido un error</h3>
          <?php
        } else {
          ?>
        <h3 class="no">¡Completá los campos!</h3>
        <?php
      }
    }
}

?>
