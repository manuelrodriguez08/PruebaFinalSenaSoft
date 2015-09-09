<?php

if($conexion = mysql_connect("localhost","SenaSoft","sena")){
    
    echo "Conecto";
}
            



$x = $_POST['cliente'];
$y = $_POST['codigo'];
$z = $_POST['producto'];
$can = $_POST['cantidad'];

/*echo $x;
echo $can;
echo $y;
echo $z;*/
echo $can;




mysql_select_db("sena",$conexion);

$sql = "INSERT INTO pedido(cliente,codigo,productos,cantidad) VALUES('$x','$y','$z','$can')";

if(mysql_query($sql)){
    echo "Se cargaron los datos a la tabla";
}else{
    echo 'no se pudo llenar la tabla debido a:'.  mysql_error();
}

?>

