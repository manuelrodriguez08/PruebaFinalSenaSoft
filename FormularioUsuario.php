<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head> <link href="Diseño.css" rel="stylesheet" type="text/css">
    <body>
        
       
        <?php
        
            
         
            
            
             
              echo '  
                <center> <div> <legend>  <center> <h1> REGISTRAR NUEVO USUARIO</h1> </center> </legend>                          
                   <form action="RegistrarUsuario.php" method="POST">
                <p>Nombre </p>
                <input type="text" name="nombre"><br>
               <p>Apellido </p>
                <input type="text" name="apellido"><br>
                <p>Edad </p>
               <input type="text" name="edad"><br>
               <p>Telefono </p>
                <input type="text" name="telefono"><br>
               <p>User </p>
                <input type="text" name="user"><br>
                <p>Password </p>
                <input type="password" name="pass"><br><br>
                 <input type="submit"  value="CREAR USUARIO">
                             
                </div></center></form>';
              
             
              
              echo '<br>
                    <br>
                    
        <form action="index.php" >
              <center><input type="submit" value="Iniciar Sesion"></center>
        </form>';
        ?>
        
        
    </body>
</html>
