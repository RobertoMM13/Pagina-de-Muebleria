<?php
include 'cn.php';

$codigo=$_GET['codigo'];


$eliminar = "DELETE FROM Clientes WHERE No_cuenta = '$codigo'";

$resultado =mysqli_query($conexion, $eliminar);
if(!$resultado){
echo 'ERROR al registrarse';       //manda un mensaje en caso de que haya un error al insertar los datos
} else{

 echo 'usuario registrado exitosamente';    //manda un mensaje en caso de que se guarden los datos correctamente en la base de datos

}
mysqli_close($conexion);
?>
