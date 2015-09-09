<?php
if($conexion = mysql_connect("localhost","SenaSoft","sena")){
    
    echo "Conecto";
}

/*if(mysql_query("CREATE DATABASE sena",$conexion)){
    
    echo "Creo";
}*/
mysql_select_db('sena',$conexion);

/*$tabla = "CREATE TABLE usuario
        (
        usuarioID int NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(usuarioID),
        usuario varchar(20),
        contrasena varchar(20),
        nombre varchar(20),
        apellido varchar(20),
        edad int,
        telefono varchar(20)
        
        
        )";
        
if(mysql_query($tabla)){
    
    echo "se Creo correctamente";
}else{
    echo "no se creo debido a: " .mysql_error();
}*/


/*$tabla = "CREATE TABLE producto
        (
        productoID int NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(productoID),
        nombre varchar(20),
        codigo varchar(20),
        cantidad int
       
        
        
        )";
        
if(mysql_query($tabla)){
    
    echo "se Creo correctamente";
}else{
    echo "no se creo debido a: " .mysql_error();
}*/

$tabla = "CREATE TABLE pedido
        (
        pedidoID int NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(pedidoID),
        cliente varchar(20),
        codigo varchar(20),
        productos varchar(50)
       
        
        
        )";
        
if(mysql_query($tabla)){
    
    echo "se Creo correctamente";
}else{
    echo "no se creo debido a: " .mysql_error();
}
?>
