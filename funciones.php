<?php

function conexion($db, $usuario, $pass) {
    try{
        $conexion = new PDO("mysql:host=localhost;dbname=$db", $usuario, $pass);
        return $conexion;
    } catch (PDOException $e){
        // echo "Error: " . $e->getMessage();
        return false;
    }
}