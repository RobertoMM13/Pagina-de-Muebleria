<?php
include 'cn.php';
$variable=$_GET['variable'];
$vari=$_GET['vari'];
$nuevo=$_GET['nuevo'];

$modificar = "UPDATE Clientes SET $vari='$nuevo' where No_cuenta='$variable'";


$resultado =mysqli_query($conexion, $modificar);
if(!$resultado){
echo 'ERROR al registrarse';       //manda un mensaje en caso de que haya un error al insertar los datos
} else{

 echo 'usuario registrado exitosamente';    //manda un mensaje en caso de que se guarden los datos correctamente en la base de datos

}
mysqli_close($conexion);
?>
