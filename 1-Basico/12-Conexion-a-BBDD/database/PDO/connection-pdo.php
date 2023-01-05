<?php

require_once "../Login/login.php";

// Conexion: tipo PDO

try {
    $connection = new PDO(
        "mysql:host=$server;dbname=$database",
        $user,
        $password
    );
    echo "Conexion realizada";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>