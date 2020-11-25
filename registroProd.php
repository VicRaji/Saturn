<?php 

 include("BaseDatos.php");
 if(isset($_POST["btnRegistrar"]))
 {
    $producto=$_POST["producto"];
    $marca=$_POST["marca"];
    $precio=$_POST["precio"];
    $descripcion=$_POST["descripcion"];
    $foto=$_POST["foto"];

    //echo($producto." de la marca ".$marca." con el precio ".$precio." y la descripcion es ".$descripcion);

    $operacionBD = new BaseDatos();
    $operacionBD->conectarBD();
 }
?>