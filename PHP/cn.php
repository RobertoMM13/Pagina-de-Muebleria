<?php
//si tira error,cambia el "root" por nombre de usuario mysql y su "" contraseña
$conexion = mysqli_connect("localhost","root", "", "proyectofinal","3308");     //conexion con la base de datos desde el localhost
if (!$conexion) {
echo 'ERROR al conectar ala base de datos';           //manda un mensaje en caso de error en la conexion
}
else {
echo 'Conectado ala base de datos';                //manda un mensaje en caso de que la conexion sea correcta
}
