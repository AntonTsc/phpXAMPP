<?php
    /* Crear un formulario de login y visulizar la información en pantalla
    Los campos del formulario serán usuario y contrasena
    El formulario enviará la información por POST.
    Al principio hacer la prueba con GET para ver cómo se envían los parámetros. */

    $user = $_POST["user"];
    $psw = $_POST["psw"];

    echo "El usuario introducido es <b>" . $user . "</b> y la contraseña es <b>" . $psw . "</b>";
?>