<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtén el valor del campo de correo electrónico
  $email = $_POST["email"];

  // Configura los detalles del correo electrónico
  $to = "adhemarangelclaureflores@gmail.com";
  $subject = "Nuevo formulario enviado";
  $message = "Correo electrónico: " . $email;

  // Envía el correo electrónico
  mail($to, $subject, $message);

  // Redirige al usuario a una página de confirmación o muestra un mensaje de éxito
  echo "El formulario se ha enviado correctamente";
}
