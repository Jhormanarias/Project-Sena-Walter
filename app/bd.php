<?php


$usuario = 'root';
$password = '';

//Bloque de codigo protegido


try {
    $bdc = new PDO('mysql:host=localhost;dbname:proyecto_tienda',$usuario,$password);
    print 'conexion exitosa';

} catch (PDOException $error) {
    print 'Ocurrio un problema en la conexion'.$error->getMessage();

}



?>