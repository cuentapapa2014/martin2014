<?php

//ficheros requeridos por la aplicación
require './classes/Leer.php';
require './classes/Subir.php';

$nombre = Leer::post("nombre"); //nombre que recojemos del input type para el fichero
$opcion = Leer::post("opcion"); //valor obtenido del radio para aplicar la plotica de nombres
$extension = Leer::post("check");//array de extensiones permitidas
$clase = new Subir("fichero"); //clase a la que se le pasa como parámetro el nombre del campo file
$clase->setNombre($nombre); //asignamos el nombre que tendrá el fichero o ficheros
//$clase->addExtension($extension);
//comprobamos la opción de politica que se ha seleccionado en los radiobuttons
if($opcion == 0){
    $clase->setAccion(Subir::RENOMBRAR); //renombra el fichero añadiendo al nombre _número
}else if($opcion == 1){
    $clase->setAccion(Subir::REEMPLAZAR); //pisa el fichero existente y lo cambia por el nuevo
}else{
    $clase->setAccion(Subir::IGNORAR); //no sube el fichero
}
$r = $clase->subir(); //lanzamos el método que realizará la subida

echo'<a href="index.php">Volver</a>';


    