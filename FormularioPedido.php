<html>
    <head>
        <title></title>
    </head><link href="Diseño.css" rel="stylesheet" type="text/css">
    <body  >
        
    </body>
</html>

<?php

            
         
            
            
             
             echo ' <center><div>  <center> <h1> REGISTRAR NUEVO PEDIDO</h1> </center> 
                                             
                   <form action="RegistrarPedido.php" method="POST">
                                        <p> Cliente </p>
                                        <td> <input type="text" name="cliente"></td>
                                         <p> Codigo </p>
                                        <td> <input type="text" name="codigo"></td>
                                         <p> Productos </p>
                                         <td> <input type="text" name="producto" ></td>
                                          <p> Cantidad </p>
                                        <td> <select name="cantidad">  
                                        <option value="1-Docena">1 Docena </option>
                                        <option value="2-Docenas">2 Docenas </option>
                                        <option value="3-Docenas">3 Docenas </option>
                                        </select></td> <br><br>
                                         
                                        <td> <input type="submit" value="Realizar Pedido" ></td> 
                             
                     </tr></form> </div></center>';
                                        
              
              
             /* echo '<td> <select  name="productos">';
              $conexion = mysql_connect("localhost","SenaSoft","sena");

mysql_select_db("sena",$conexion);

$mostrar = mysql_query( 'SELECT * FROM producto');

while($fila = mysql_fetch_array($mostrar)){
    
    echo '<option value="'.$fila['nombre'].'" >'.$fila['nombre'].'</option>';
}
echo '</select></td>'; */
              
               
              
              
            
            
             echo '<br>
               
        <form action="VerPedido.php" >
              <center><input type="submit" value="Ver Pedidos"> </center>
        </form>';
            
?>

