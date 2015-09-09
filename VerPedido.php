
<html>
    <head>
        <title>title</title>
    </head><link href="Diseño.css" rel="stylesheet" type="text/css">
    <body>

    </body>
</html>


<?php
$conexion = mysql_connect("localhost","SenaSoft","sena");


mysql_select_db('sena',$conexion);
$mostrar = mysql_query( "SELECT * FROM pedido");

echo " <center> <h1> PEDIDOS</h1> </center>"; 
            
         echo " <center> <table border=1px width=70%>
                <tr> 
                    
                    <td> Cliente</td>
                    <td> Codigo</td>
                    <td> Productos</td>
                    <td> Cantidad(docenas) </td>
                    
                    
                </tr>";
         
         while($fila = mysql_fetch_array($mostrar)){
              echo "<tr><td>". $fila['cliente']. "</td><td>".$fila['codigo']."</td><td>". $fila['productos']."</td><td>".
                    $fila['cantidad'];
        
            
         }
         echo "</table></center>";
         
         echo '<br>
               <br>
        <form action="FormularioPedido.php" >
              <center><input type="submit" value="Registrar Nuevo Pedido"> </center>
        </form>';
?>

