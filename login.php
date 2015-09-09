<?php
session_start();
        
        
        $usuario= $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        
        $conexion = mysql_connect("localhost","SenaSoft","sena");
        
        mysql_select_db('sena',$conexion);
        
         $n = "SELECT * FROM usuario";
         
         $resultado = mysql_query($n);
         
         while($fila = mysql_fetch_array($resultado)){
             
             $usuariobasedatos= $fila['usuario'];
            $contrasenabasedatos = $fila['contrasena'];
             if($usuario == $usuariobasedatos && $contrasena == $contrasenabasedatos ){
                
                $_SESSION['usuario']= $usuario;
                $_SESSION['contrasena']= $contrasena;
                
                echo "<html> 
            
                <head>
                <meta http-equiv='REFRESH' content='0;url=FormularioPedido.php'> </head>
        </html>";
            }
         }
?>

