<?php
    $conexion=mysqli_connect('localhost','root','','proyectofinal',"3308");     //conecta con la base de datos de localhost
    ?>
    <DOCYTYPE html>
      <html>
      <head>
        <title>registro</title>
      <style>
h1{ text-align: center;}
header{background-color:#E69DFB ; padding: 10px;}
.volver{
  position:absolute;
  top:-15px;
  left: 10px;
}
      </style>
        </head>
        <body>
          <header ><!-- Esta etiqueta nos permite agregar encabezados en este cazo el titulo -->
            <div class="volver">
        <a href="http://localhost/proyecto-final/principal.html"><img src= https://www.terapeutasocupacionales.org/images/Volver-boton.png width="200" height="100"></a>
        </div>
          <h1> Registro<h1>
          </header>
          <br>
          <table border="1">                         <!-- aplicacion de borde a la tabla   !-->
            <tr>
              <td>#Cuenta</td>
              <td>Cliente</td>
              <td>Telefono</td>                              <!--creacion de la tabla  !-->
              <td>Municipio</td>
              <td>Domicilio</td>
              <td>Cobrador</td>
              <td>Articulo</td>                              <!--creacion de la tabla  !-->
              <td>Precio</td>
              <td>Abono</td>
              <td>Saldo</td>
            </tr>
            <?php
            $sql="SELECT * from Clientes";                   //codigo que se utiliza para mostrar los datos
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
              ?>
              <tr>
                <td><?php echo $mostrar['No_cuenta'] ?></td>
                <td><?php echo $mostrar['Tu'] ?></td>
                <td><?php echo $mostrar['telefono'] ?></td>
                <td><?php echo $mostrar['Municipio'] ?></td>        <!--muestra los datos en la tabla  -->
                <td><?php echo $mostrar['domicilio'] ?></td>
                <td><?php echo $mostrar['cobrador'] ?></td>
                <td><?php echo $mostrar['articulo'] ?></td>
                <td><?php echo $mostrar['precio'] ?></td>        <!--muestra los datos en la tabla  -->
                <td><?php echo $mostrar['abono'] ?></td>
                <td><?php echo $mostrar['saldo'] ?></td>
              </tr>
              <?php
              }
              ?>
            <div>
   </table>
   <form>
<a href="pdf.php">
  generar XLS
</a>
     </form>
   </div>
 </body>
 </html>
