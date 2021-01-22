
<?php
include 'cn.php';   // manda a llamar como inicio a la pagina cn.php

  $cuenta =$_GET['cuenta'];
  $Tu =$_GET['Tu'];
  $telefono =$_GET['telefono'];
  $Municipio =$_GET['Municipio'];
  $domicilio =$_GET['domicilio'];      //obtiene los datos del formulario y las registra en variables
  $cobrador =$_GET['cobrador'];
  $articulo =$_GET['articulo'];      //obtiene los datos del formulario y las registra en variables
  $precio =$_GET['precio'];
  $abono =$_GET['abono'];
  $saldo =$_GET['saldo'];


echo "<h2>Su registro quedo con exito</h2>";
echo "Numero de cuenta: " . $cuenta . "<br/>";
echo "Nombre del cliente: " . $Tu . "<br/>";
echo "Telefono: " . $telefono . "<br/>";
echo "Municipio o ciudad: " . $Municipio . "<br/>";
echo "Domicilio: " . $domicilio . "<br/>";
echo "Nombre del cobrador: " . $cobrador . "<br/>";          // mensajes que muestran los valores escritos en el formulario
echo "Articulo: " . $articulo . "<br/>";
echo "Precio: " . $precio . "<br/>";
echo "Abono: " . $abono . "<br/>";
echo "Saldo: " . $saldo . "<br/>";

echo '<a href="http://localhost/Proyecto-final/pagina-configuracion.html">Go to home</a>';          //link y mensaje en que nos lleva a la pagina principal
// consulta para insertar

$insertar = "INSERT INTO Clientes (No_cuenta, Tu, telefono, Municipio, domicilio, cobrador, articulo, precio, abono, saldo ) VALUES ('$cuenta', '$Tu', '$telefono', '$Municipio', '$domicilio', '$cobrador', '$articulo', '$precio', '$abono', '$saldo')";   //inserta los datos de las variables en la base de datos

//ejecutar consulta

 $resultado =mysqli_query($conexion, $insertar);
 if(!$resultado){
echo 'ERROR al registrarse';       //manda un mensaje en caso de que haya un error al insertar los datos
 } else{

  echo 'usuario registrado exitosamente';    //manda un mensaje en caso de que se guarden los datos correctamente en la base de datos

 }
 //cerrar conexion
 mysqli_close($conexion);

 ?>
