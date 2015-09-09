<html>
    <head>
        <title>title</title>
    </head> <meta http-equiv='REFRESH' content='0;url=FormularioUsuario.php'>
    <body>

    

<?php
if($conexion = mysql_connect("localhost","SenaSoft","sena")){
    
    echo "Conecto";
}
            

$usu = $_POST['user'];
$con = $_POST['pass'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$edad = $_POST['edad'];




mysql_select_db("sena",$conexion);

$sql = "INSERT INTO usuario(usuario,contrasena,nombre,apellido,edad,telefono) VALUES('$usu','$con','$nombre','$apellido',$edad,'$telefono')";

if(mysql_query($sql)){
    echo "Se cargaron los datos a la tabla";
}else{
    echo 'no se pudo llenar la tabla debido a:'.  mysql_error();
}
?>
        
</body>
</html>
